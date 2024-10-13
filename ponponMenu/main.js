const { mount } = require("./build/index");
/* This file is loaded when Organizr is loaded */
// Load once Organizr loads
$("body").arrive("#activeInfo", { onceOnly: true }, function () {
  testPluginLaunch();
});
// FUNCTIONS
function testPluginLaunch() {
  const el = document.createElement("div");
  el.id = "ponponMenu";
  document.body.appendChild(el);
  mount(el);
}
// EVENTS and LISTENERS
