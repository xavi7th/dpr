webpackJsonp([1],{

/***/ 153:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(154)
}
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(156)
/* template */
var __vue_template__ = __webpack_require__(157)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-00adc362"
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/Nav/ViewAllNotifications.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-00adc362", Component.options)
  } else {
    hotAPI.reload("data-v-00adc362", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 154:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(155);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(3)("44b2a4fa", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-00adc362\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./ViewAllNotifications.vue", function() {
     var newContent = require("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-00adc362\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./ViewAllNotifications.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 155:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)(false);
// imports


// module
exports.push([module.i, "\n.box[data-v-00adc362] {\n  max-height: 72vh;\n  overflow: scroll;\n}\n.product-info[data-v-00adc362] {\n  margin: 0 30px;\n}\n.label[data-v-00adc362] {\n  margin-right: 10px;\n}\n", ""]);

// exports


/***/ }),

/***/ 156:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__routes__ = __webpack_require__(145);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/**
 * Using webpack code splitting to load the notification components only if requested
 */

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "UserNotifications",
  data: function data() {
    return {
      all_notifications: {},
      currentComponent: null
    };
  },
  created: function created() {
    var _this = this;

    axios.get(__WEBPACK_IMPORTED_MODULE_0__routes__["a" /* GetAllNotifications */]).then(function (rsp) {
      console.log(rsp);
      _this.all_notifications = rsp.data.data;
    }).catch(function (err) {
      if (err.response) {
        swal("Server Error", "" + err.response.data, "error");
      } else if (err.request) {
        swal("Request Error", "" + err.request, "error");
      } else {
        swal("Requset Error", "" + err.message, "error");
      }
    });
  },

  computed: {
    all_notifications_count: function all_notifications_count() {
      return _.size(this.all_notifications);
    }
  }
});

/***/ }),

/***/ 157:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _vm._t("close-button"),
      _vm._v(" "),
      _c("div", { staticClass: "row d-flex justify-content-center" }, [
        _c("div", { staticClass: "col-md-8" }, [
          _c("div", { staticClass: "box box-primary" }, [
            _vm._m(0),
            _vm._v(" "),
            _c("div", { staticClass: "box-body" }, [
              _c(
                "ul",
                { staticClass: "products-list product-list-in-box" },
                _vm._l(_vm.all_notifications, function(n) {
                  return _c("li", { key: n.id, staticClass: "item" }, [
                    _c("div", { staticClass: "product-info" }, [
                      _c(
                        "a",
                        {
                          staticClass: "product-title",
                          attrs: { href: "javascript:void(0)" }
                        },
                        [
                          _vm._v(
                            "\n                  " +
                              _vm._s(n.sender_name) +
                              "\n                  "
                          ),
                          _c(
                            "span",
                            { staticClass: "label label-warning pull-right" },
                            [_vm._v("Mark as Read")]
                          ),
                          _vm._v(" "),
                          _c(
                            "span",
                            { staticClass: "label label-danger pull-right" },
                            [_vm._v("Delete")]
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c("span", { staticClass: "product-description" }, [
                        _vm._v(_vm._s(n.notification) + ".")
                      ])
                    ])
                  ])
                })
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "box-footer text-center" })
          ])
        ])
      ])
    ],
    2
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "box-header with-border" }, [
      _c("h3", { staticClass: "box-title" }, [_vm._v("All Notifications")])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-00adc362", module.exports)
  }
}

/***/ })

});