webpackJsonp([19],{338:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={mounted:function(){var t=this;console.log("Component hmm."),axios.get("/js/location.json").then(function(e){t.states=e.data.nigeria})},data:function(){return{states:[],lga:[],state:null}},methods:{onChange:function(){var t=this;console.log(this.state),axios.get("/js/location.json").then(function(e){for(var n=t.states.length,o=0;o<n;o++)if(t.states[o].state==t.state){t.lga=[];for(var s=0;s<e.data.nigeria[o].lga.length;s++)t.lga.push(e.data.nigeria[o].lga[s])}console.log(t.lga)})}}}},339:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"col-xs-6"},[n("div",{staticClass:"form-group"},[n("label",[t._v("State")]),t._v(" "),n("select",{directives:[{name:"model",rawName:"v-model",value:t.state,expression:"state"}],staticClass:"form-control",staticStyle:{width:"100%"},attrs:{id:"dropdown2",name:"state"},on:{change:[function(e){var n=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){return"_value"in t?t._value:t.value});t.state=e.target.multiple?n:n[0]},function(e){t.onChange()}]}},[n("option",{attrs:{selected:"selected"},domProps:{value:null}},[t._v("Select State")]),t._v(" "),t._l(t.states,function(e){return n("option",{domProps:{value:e.state}},[t._v(t._s(e.state))])})],2)])]),t._v(" "),n("div",{staticClass:"col-xs-6"},[n("div",{staticClass:"form-group"},[n("label",[t._v("L.G.A")]),t._v(" "),n("select",{staticClass:"form-control",staticStyle:{width:"100%"},attrs:{id:"dropdown3",name:"lga"}},[n("option",{attrs:{selected:"selected"},domProps:{value:null}},[t._v("Select LGA")]),t._v(" "),t._l(t.lga,function(e){return n("option",{domProps:{value:e}},[t._v(t._s(e))])})],2)])])])},staticRenderFns:[]}},386:function(t,e,n){var o=n(42)(n(338),n(339),!1,null,null,null);t.exports=o.exports},42:function(t,e){t.exports=function(t,e,n,o,s,a){var r,l=t=t||{},i=typeof t.default;"object"!==i&&"function"!==i||(r=t,l=t.default);var c,u="function"==typeof l?l.options:l;if(e&&(u.render=e.render,u.staticRenderFns=e.staticRenderFns,u._compiled=!0),n&&(u.functional=!0),s&&(u._scopeId=s),a?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(a)},u._ssrRegister=c):o&&(c=o),c){var d=u.functional,f=d?u.render:u.beforeCreate;d?(u._injectStyles=c,u.render=function(t,e){return c.call(e),f(t,e)}):u.beforeCreate=f?[].concat(f,c):[c]}return{esModule:r,exports:l,options:u}}}});
//# sourceMappingURL=19.js.map