webpackJsonp([16],{221:function(e,t,n){var o=n(222);"string"==typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);n(43)("56cca889",o,!0,{})},222:function(e,t,n){(e.exports=n(40)(!1)).push([e.i,"#doc_icon{color:#ccc}#req{margin-right:10px}#reason-btn{cursor:pointer}",""])},223:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default={mounted:function(){console.log("Component hmm.")},props:["title","name","inputid","reason"],data:function(){return{optionSelected:"no",docIcon:"ion-android-cancel text-red",fileInputStatus:!0,showReasonBtn:!0,fileValue:null,fileColor:"#ccc"}},methods:{previewFile:function(e){console.log(e.target.files[0].name),this.fileValue=e.target.files[0].name,this.fileColor="green"}},updated:function(){"no"==this.optionSelected?(this.docIcon="ion-android-cancel text-red",this.fileInputStatus=!0,this.fileValue=null,this.fileColor="#ccc",this.showReasonBtn=!0):"yes"==this.optionSelected?(this.docIcon="ion-checkmark-circled",this.fileInputStatus=!1,this.showReasonBtn=!1):"null"==this.optionSelected&&(this.docIcon="ion-android-remove-circle text-yellow",this.fileInputStatus=!0,this.fileValue=null,this.fileColor="#ccc",this.showReasonBtn=!0)}}},224:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"form-group"},[n("div",{staticClass:"modal modal-danger fade",attrs:{id:""+e.name}},[n("div",{staticClass:"modal-dialog"},[n("div",{staticClass:"modal-content"},[n("div",{staticClass:"modal-header"},[e._m(0),e._v(" "),n("h4",{staticClass:"modal-title"},[e._v("Specify a reason why "),n("b",[n("i",[e._v(e._s(e.title))])]),e._v(" is not available")])]),e._v(" "),n("div",{staticClass:"modal-body",staticStyle:{padding:"5px"}},[n("textarea",{staticStyle:{width:"100%",resize:"none",height:"200px",color:"#000",padding:"5px"},attrs:{name:e.reason,rows:"8",cols:"80",placeholder:"Give reason..."}})]),e._v(" "),e._m(1)])])]),e._v(" "),n("input",{attrs:{type:"text",name:e.title,hidden:""},domProps:{value:e.title}}),e._v(" "),n("label",{attrs:{id:"req"}},[e._v(e._s(e.title))]),n("i",{directives:[{name:"show",rawName:"v-show",value:e.showReasonBtn,expression:"showReasonBtn"}],staticClass:"fa fa-edit text-red",attrs:{id:"reason-btn","data-toggle":"modal","data-target":"#"+e.name}}),e._v(" "),n("span",{attrs:{id:"req_ind"}},[n("label",[n("input",{directives:[{name:"model",rawName:"v-model",value:e.optionSelected,expression:"optionSelected"}],attrs:{type:"radio",name:e.name,value:"no",checked:""},domProps:{checked:e._q(e.optionSelected,"no")},on:{change:function(t){e.optionSelected="no"}}}),e._v("\n        No\n      ")]),e._v(" "),n("label",[n("input",{directives:[{name:"model",rawName:"v-model",value:e.optionSelected,expression:"optionSelected"}],attrs:{type:"radio",name:e.name,value:"yes"},domProps:{checked:e._q(e.optionSelected,"yes")},on:{change:function(t){e.optionSelected="yes"}}}),e._v("\n        Yes\n      ")]),e._v(" "),n("label",[n("input",{directives:[{name:"model",rawName:"v-model",value:e.optionSelected,expression:"optionSelected"}],attrs:{type:"radio",name:e.name,value:"null"},domProps:{checked:e._q(e.optionSelected,"null")},on:{change:function(t){e.optionSelected="null"}}}),e._v("\n        Not Applicable\n      ")]),e._v(" "),n("label",{staticClass:"btn btn-success",attrs:{for:e.inputid}},[e._v("Select file")]),e._v(" "),n("input",{staticStyle:{display:"none"},attrs:{type:"file",id:e.inputid,name:e.inputid,disabled:e.fileInputStatus},on:{change:e.previewFile}}),e._v(" "),n("span",{attrs:{id:"doc_icon"}},[n("i",{class:e.docIcon,style:{color:e.fileColor}})])]),e._v(" "),n("hr")])},staticRenderFns:[function(){var e=this.$createElement,t=this._self._c||e;return t("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal","aria-label":"Close"}},[t("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"modal-footer"},[t("button",{staticClass:"btn btn-outline",attrs:{type:"button","data-dismiss":"modal"}},[this._v("Submit")])])}]}},374:function(e,t,n){var o=n(42)(n(223),n(224),!1,function(e){n(221)},null,null);e.exports=o.exports},42:function(e,t){e.exports=function(e,t,n,o,i,s){var a,r=e=e||{},l=typeof e.default;"object"!==l&&"function"!==l||(a=e,r=e.default);var d,c="function"==typeof r?r.options:r;if(t&&(c.render=t.render,c.staticRenderFns=t.staticRenderFns,c._compiled=!0),n&&(c.functional=!0),i&&(c._scopeId=i),s?(d=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),o&&o.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(s)},c._ssrRegister=d):o&&(d=o),d){var u=c.functional,p=u?c.render:c.beforeCreate;u?(c._injectStyles=d,c.render=function(e,t){return d.call(t),p(e,t)}):c.beforeCreate=p?[].concat(p,d):[d]}return{esModule:a,exports:r,options:c}}},43:function(e,t,n){var o="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!o)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var i=n(44),s={},a=o&&(document.head||document.getElementsByTagName("head")[0]),r=null,l=0,d=!1,c=function(){},u=null,p="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function h(e){for(var t=0;t<e.length;t++){var n=e[t],o=s[n.id];if(o){o.refs++;for(var i=0;i<o.parts.length;i++)o.parts[i](n.parts[i]);for(;i<n.parts.length;i++)o.parts.push(m(n.parts[i]));o.parts.length>n.parts.length&&(o.parts.length=n.parts.length)}else{var a=[];for(i=0;i<n.parts.length;i++)a.push(m(n.parts[i]));s[n.id]={id:n.id,refs:1,parts:a}}}}function v(){var e=document.createElement("style");return e.type="text/css",a.appendChild(e),e}function m(e){var t,n,o=document.querySelector("style["+p+'~="'+e.id+'"]');if(o){if(d)return c;o.parentNode.removeChild(o)}if(f){var i=l++;o=r||(r=v()),t=y.bind(null,o,i,!1),n=y.bind(null,o,i,!0)}else o=v(),t=function(e,t){var n=t.css,o=t.media,i=t.sourceMap;o&&e.setAttribute("media",o);u.ssrId&&e.setAttribute(p,t.id);i&&(n+="\n/*# sourceURL="+i.sources[0]+" */",n+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(i))))+" */");if(e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}.bind(null,o),n=function(){o.parentNode.removeChild(o)};return t(e),function(o){if(o){if(o.css===e.css&&o.media===e.media&&o.sourceMap===e.sourceMap)return;t(e=o)}else n()}}e.exports=function(e,t,n,o){d=n,u=o||{};var a=i(e,t);return h(a),function(t){for(var n=[],o=0;o<a.length;o++){var r=a[o];(l=s[r.id]).refs--,n.push(l)}t?h(a=i(e,t)):a=[];for(o=0;o<n.length;o++){var l;if(0===(l=n[o]).refs){for(var d=0;d<l.parts.length;d++)l.parts[d]();delete s[l.id]}}}};var _,g=(_=[],function(e,t){return _[e]=t,_.filter(Boolean).join("\n")});function y(e,t,n,o){var i=n?"":o.css;if(e.styleSheet)e.styleSheet.cssText=g(t,i);else{var s=document.createTextNode(i),a=e.childNodes;a[t]&&e.removeChild(a[t]),a.length?e.insertBefore(s,a[t]):e.appendChild(s)}}},44:function(e,t){e.exports=function(e,t){for(var n=[],o={},i=0;i<t.length;i++){var s=t[i],a=s[0],r={id:e+":"+i,css:s[1],media:s[2],sourceMap:s[3]};o[a]?o[a].parts.push(r):n.push(o[a]={id:a,parts:[r]})}return n}}});
//# sourceMappingURL=16.js.map