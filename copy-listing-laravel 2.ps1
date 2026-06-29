$files = @(
    "bootstrap\app.php",
    "vite.config.js"
)

$folders = @(
    "app",
    "database\factories",
    "database\migrations",
    "database\seeders",
    "resources",
    "routes"
)

# Расширения для исключения
$excludeExtensions = @(
    '.ttf', '.otf', '.woff', '.woff2', '.eot',  # шрифты
    '.jpg', '.jpeg', '.png', '.gif', '.bmp', '.svg', '.ico', '.webp',  # изображения
    '.css'  # tailwind/css файлы
)

# Имена файлов для исключения
$excludeFiles = @(
    'tailwind.css',
    'app.css'
)

# Очищаем output.txt
Remove-Item "output.txt" -ErrorAction SilentlyContinue
New-Item "output.txt" -ItemType File -Force | Out-Null

# Устанавливаем кодировку UTF-8 для вывода
$PSDefaultParameterValues['Out-File:Encoding'] = 'utf8'

foreach ($file in $files) {
    if (Test-Path $file) {
        $fullPath = (Resolve-Path $file).Path
        "`n$fullPath`n" | Out-File -FilePath "output.txt" -Append
        
        Get-Content $file -Raw | Out-File -FilePath "output.txt" -Append
    }
}

foreach ($folder in $folders) {
    if (Test-Path $folder -PathType Container) {
        Get-ChildItem $folder -Recurse -File | Where-Object {
            $shouldInclude = $true
            
            # Проверяем расширение
            $extension = $_.Extension.ToLower()
            if ($excludeExtensions -contains $extension) {
                $shouldInclude = $false
            }
            
            # Проверяем имя файла
            $fileName = $_.Name.ToLower()
            if ($excludeFiles -contains $fileName) {
                $shouldInclude = $false
            }
            
            # Дополнительная проверка для tailwind в пути
            if ($_.FullName.ToLower() -like "*tailwind*") {
                $shouldInclude = $false
            }
            
            return $shouldInclude
        } | ForEach-Object {
            $fullPath = $_.FullName
            "`n$fullPath`n" | Out-File -FilePath "output.txt" -Append
            
            # Пробуем разные кодировки при чтении
            try {
                # Сначала пробуем UTF-8
                Get-Content $_.FullName -Raw -Encoding UTF8 | Out-File -FilePath "output.txt" -Append
            }
            catch {
                try {
                    # Затем пробуем Windows-1251
                    Get-Content $_.FullName -Raw -Encoding Default | Out-File -FilePath "output.txt" -Append
                }
                catch {
                    # Если ничего не помогло, читаем как есть
                    Get-Content $_.FullName -Raw | Out-File -FilePath "output.txt" -Append
                }
            }
        }
    }
}

Write-Host "Готово! Содержимое файлов сохранено в output.txt с полными путями"
Write-Host "Исключены: шрифты, изображения и tailwind файлы"