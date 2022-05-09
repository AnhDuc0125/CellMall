//get current URL
let url = new URL(window.location.href);

function addFilter(content) {
  url.searchParams.set("filter", content);

  window.location.replace(url.search);
}
