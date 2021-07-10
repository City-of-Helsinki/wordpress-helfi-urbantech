import debounce from 'lodash-es/debounce';

setAppHeight()
window.addEventListener('resize', debounce(setAppHeight, 150));

addToggleListener(document.querySelector('.site-hamburger-button'))

function setAppHeight () {
  const doc = document.documentElement
  doc.style.setProperty('--app-height', `${window.innerHeight}px`)
}

function addToggleListener (el) {
  if (!el) {
    console.warn('Trying to add toggle listener to element that does not exist')
    return
  }
  el.addEventListener('click', () => requestAnimationFrame(() => toggleAriaExpanded(el)))
}

function toggleAriaExpanded (el) {
  const isExpanded = el.getAttribute('aria-expanded') === 'true'
  el.setAttribute('aria-expanded', !isExpanded)

  const controlsStr = el.getAttribute('aria-controls')
  if (controlsStr) {
    controlsStr.split(' ').forEach((selector => {
      const el = document.getElementById(selector)
      if (el) {
        el.classList[isExpanded ? 'remove' : 'add']('is-expanded')
      }
    }))
  }
}
