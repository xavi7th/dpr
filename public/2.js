webpackJsonp([2],{

/***/ 159:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(160)
}
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(162)
/* template */
var __vue_template__ = __webpack_require__(163)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-6d9a171a"
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
Component.options.__file = "resources/assets/js/components/Nav/ViewNotification.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6d9a171a", Component.options)
  } else {
    hotAPI.reload("data-v-6d9a171a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 160:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(161);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(2)("6dac0942", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6d9a171a\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./ViewNotification.vue", function() {
     var newContent = require("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6d9a171a\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./ViewNotification.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 161:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(1)(false);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", ""]);

// exports


/***/ }),

/***/ 162:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__routes__ = __webpack_require__(15);
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


/* harmony default export */ __webpack_exports__["default"] = ({
  name: "ViewANotification",
  props: ["propsData"],
  data: function data() {
    return {
      notif_msg: null
    };
  },

  methods: {
    replyNotification: function replyNotification() {
      var _this = this;

      if (this.notif_msg == null) {
        swal("Empty notification", "", "warning");
        return;
      }
      axios.post(__WEBPACK_IMPORTED_MODULE_0__routes__["f" /* sendNotification */], {
        recipient_id: this.propsData.sender_id,
        msg: this.notif_msg
      }).then(function (rsp) {
        console.log(rsp);
        if (rsp.status == 201) {
          swal("Sent", "Notitification sent to " + _this.propsData.sender_name, "success");
          _this.notif_msg = null;
        }
      }).catch(function (err) {
        console.log(err.response);
        if (err.response) {
          swal("Server Error", "" + err.response.message, "error");
        } else if (err.request) {
          swal("Request Error", "" + err.request, "error");
        } else {
          swal("Requset Error", "" + err.message, "error");
        }
      });
    }
  }
});

/***/ }),

/***/ 163:
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
      _c("div", { staticClass: "row d-flex justify-content-center mt-5" }, [
        _c("div", { staticClass: "col-md-6" }, [
          _c("div", { staticClass: "box box-widget" }, [
            _c("div", { staticClass: "box-header with-border" }, [
              _c("div", { staticClass: "user-block" }, [
                _c("span", { staticClass: "username" }, [
                  _c("a", [_vm._v(_vm._s(_vm.propsData.sender_name))])
                ]),
                _vm._v(" "),
                _c("span", { staticClass: "description" }, [
                  _vm._v(
                    "Shared publicly - " + _vm._s(_vm.propsData.created_at)
                  )
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "box-body" }, [
              _c("p", [_vm._v(_vm._s(_vm.propsData.notification))])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "box-footer" }, [
              _c(
                "form",
                {
                  attrs: { method: "post" },
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.replyNotification($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "img-push" }, [
                    _c("textarea", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.notif_msg,
                          expression: "notif_msg"
                        }
                      ],
                      staticClass: "form-control input-sm",
                      attrs: {
                        type: "text",
                        placeholder:
                          "Send notification to " + _vm.propsData.sender_name
                      },
                      domProps: { value: _vm.notif_msg },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.notif_msg = $event.target.value
                        }
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _vm._m(0)
                ]
              )
            ])
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
    return _c(
      "div",
      { staticClass: "box-footer px-0 d-flex justify-content-end" },
      [
        _c(
          "button",
          { staticClass: "btn btn-primary", attrs: { type: "submit" } },
          [_vm._v("Submit")]
        )
      ]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-6d9a171a", module.exports)
  }
}

/***/ })

});