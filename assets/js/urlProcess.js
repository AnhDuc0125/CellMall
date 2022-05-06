//get current URL
let url = new URL(window.location.href);

function addFilter(content) {
  console.log(url.searchParams.append("filter", content));
}
