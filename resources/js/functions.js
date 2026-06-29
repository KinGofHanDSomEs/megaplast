const id = (id) => document.getElementById(id);
const slc = (selector, element = null) => {
    if (element !== null) return element.querySelector(selector);
    return document.querySelector(selector);
}
const slcs = (selector, element = null) => {
    if (element !== null) return [...element.querySelectorAll(selector)];
    return [...document.querySelectorAll(selector)];
}
const tag = (tag) => document.getElementsByTagName(tag);
const cls = (cls) => document.getElementsByClassName(cls);
const event = (element, event, func) => element.addEventListener(event, func);
const get = (item) => localStorage.getItem(item);
const set = (item, value) => localStorage.setItem(item, value);
const log = (...args) => console.log(...args);

const doc = document;
const body = doc.body;
const html = doc.documentElement;

export { id, slc, slcs, tag, cls, event, get, set, log, doc, body, html };
