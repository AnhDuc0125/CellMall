//get current URL
let url = new URL(window.location.href);

function addCategory(content) {
  url.searchParams.set("cate", content);

  window.location.replace(url.search);
}

function addFilter(content) {
  url.searchParams.set("filter", content);

  window.location.replace(url.search);
}

function removeParam(method) {
  url.searchParams.delete(method);

  window.location.replace(url.search);
}

//add class when get url
//  Cate
let cateId = url.searchParams.get("cate");
if (cateId) {
  cateId = cateId.replace(/\s/g, "");
  let cateNode = document.querySelector(`#${cateId}`);
  cateNode.classList.add("chosen");
}

//  Filter
let filterId = url.searchParams.get("filter");
if (filterId) {
  filterId = filterId.replace(/\s/g, "");
  let filterNode = document.querySelector(`#${filterId}`);
  filterNode.classList.add("chosen");
}
