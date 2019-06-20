webpackJsonp([18],{215:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={mounted:function(){var t=this;axios.get("js/location.json").then(function(e){t.states=e.data.nigeria}),axios.get("js/applicationTypesAndSubCategory.json").then(function(e){t.application_types=e.data.app_doc})},data:function(){return{application_types:[],sub_categories:[],states:[],lga:[],state:"Select State",application_type:"Select Application Type",sub_category:"Select Sub-Category",typeValid:!1}},methods:{onChangeOne:function(){var t=this;this.sub_categories=[],axios.get("js/applicationTypesAndSubCategory.json").then(function(e){for(var a=t.application_types.length,s=0;s<a;s++)if(t.application_types[s].application_type==t.application_type)for(var i=0;i<e.data.app_doc[s].sub_category.length;i++)t.sub_categories.push(e.data.app_doc[s].sub_category[i])})},onChangeTwo:function(){var t=this;this.lga=[],axios.get("js/location.json").then(function(e){for(var a=t.states.length,s=0;s<a;s++)if(t.states[s].state==t.state)for(var i=0;i<e.data.nigeria[s].lga.length;i++)t.lga.push(e.data.nigeria[s].lga[i])})},type_valid:function(){"Select Sub-Category"==this.sub_category||"Site Suitability Inspection"==this.sub_category||"LPG-ATC"==this.sub_category?this.typeValid=!1:this.typeValid=!0}}}},216:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[t._m(0),t._v(" "),t._m(1),t._v(" "),t._m(2),t._v(" "),a("input",{attrs:{type:"text",name:"application_type",value:"LPG Retailer Outlets",hidden:""}}),t._v(" "),a("input",{attrs:{type:"text",name:"sub_category",value:"Take Over",hidden:""}}),t._v(" "),t._m(3),t._v(" "),t._m(4),t._v(" "),a("div",{staticClass:"row"},[a("div",{staticClass:"col-xs-6"},[a("div",{staticClass:"form-group"},[a("label",[t._v("State")]),t._v(" "),a("select",{directives:[{name:"model",rawName:"v-model",value:t.state,expression:"state"}],staticClass:"form-control",staticStyle:{width:"100%"},attrs:{id:"dropdown2",name:"state"},on:{change:[function(e){var a=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){return"_value"in t?t._value:t.value});t.state=e.target.multiple?a:a[0]},function(e){t.onChangeTwo()}]}},[a("option",{attrs:{selected:"selected"}},[t._v("Select State")]),t._v(" "),t._l(t.states,function(e){return a("option",{domProps:{value:e.state}},[t._v(t._s(e.state))])})],2)])]),t._v(" "),a("div",{staticClass:"col-xs-6"},[a("div",{staticClass:"form-group"},[a("label",[t._v("L.G.A")]),t._v(" "),a("select",{staticClass:"form-control",staticStyle:{width:"100%"},attrs:{id:"dropdown3",name:"lga"}},[a("option",{attrs:{selected:"selected"}},[t._v("Select LGA")]),t._v(" "),t._l(t.lga,function(e){return a("option",{domProps:{value:e}},[t._v(t._s(e))])})],2)])])]),t._v(" "),t._m(5),t._v(" "),t._m(6)])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group"},[e("label",[this._v("Name of Gas Plant")]),this._v(" "),e("div",{staticClass:"input-group"},[e("span",{staticClass:"input-group-addon"},[e("i",{staticClass:"ion-ios-list-outline"})]),this._v(" "),e("input",{staticClass:"form-control",attrs:{type:"text",name:"gas_plant_nae",placeholder:"Enter Name of Gas Plant"}})])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group"},[e("label",[this._v("New Name of Gas Plant")]),this._v(" "),e("div",{staticClass:"input-group"},[e("span",{staticClass:"input-group-addon"},[e("i",{staticClass:"ion-ios-list-outline"})]),this._v(" "),e("input",{staticClass:"form-control",attrs:{type:"text",name:"new_name_of_gas_plant",placeholder:"Enter New Name of Gas Plant"}})])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group"},[e("label",[this._v("Company Alias")]),this._v(" "),e("div",{staticClass:"input-group"},[e("span",{staticClass:"input-group-addon"},[e("i",{staticClass:"ion-ios-list-outline"})]),this._v(" "),e("input",{staticClass:"form-control",attrs:{type:"text",name:"company_alias",placeholder:"Enter Company Alias"}})])])},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"form-group"},[a("label",[t._v("LPG Category")]),t._v(" "),a("select",{staticClass:"form-control select2",staticStyle:{width:"100%"},attrs:{name:"lpg_category"}},[a("option",{attrs:{selected:"selected"}},[t._v("Select Type")]),t._v(" "),a("option",{attrs:{value:"Refilling Plant"}},[t._v("Refilling Plant")]),t._v(" "),a("option",{attrs:{value:"Industrial Plant"}},[t._v("Industrial Plant")]),t._v(" "),a("option",{attrs:{value:"Auto Gas Plant"}},[t._v("Auto Gas Plant")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group",attrs:{id:"capacity_of_tank"}},[e("label",[this._v("Capacity of Tank (MT)")]),this._v(" "),e("div",{staticClass:"input-group"},[e("span",{staticClass:"input-group-addon"},[e("i",{staticClass:"ion-beaker"})]),this._v(" "),e("input",{staticClass:"form-control",attrs:{type:"text",name:"capacity_of_tank",placeholder:"Enter Capacity of tank"}})])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group"},[e("label",[this._v("Town")]),this._v(" "),e("div",{staticClass:"input-group"},[e("span",{staticClass:"input-group-addon"},[e("i",{staticClass:"ion ion-location"})]),this._v(" "),e("input",{staticClass:"form-control",attrs:{type:"text",name:"town",placeholder:"Enter Town"}})])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group"},[e("label",[this._v("Address")]),this._v(" "),e("div",{staticClass:"input-group"},[e("span",{staticClass:"input-group-addon"},[e("i",{staticClass:"ion ion-location"})]),this._v(" "),e("input",{staticClass:"form-control",attrs:{type:"text",name:"address",placeholder:"Enter Address"}})])])}]}},372:function(t,e,a){var s=a(42)(a(215),a(216),!1,null,null,null);t.exports=s.exports},42:function(t,e){t.exports=function(t,e,a,s,i,n){var o,l=t=t||{},r=typeof t.default;"object"!==r&&"function"!==r||(o=t,l=t.default);var c,p="function"==typeof l?l.options:l;if(e&&(p.render=e.render,p.staticRenderFns=e.staticRenderFns,p._compiled=!0),a&&(p.functional=!0),i&&(p._scopeId=i),n?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),s&&s.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(n)},p._ssrRegister=c):s&&(c=s),c){var u=p.functional,_=u?p.render:p.beforeCreate;u?(p._injectStyles=c,p.render=function(t,e){return c.call(e),_(t,e)}):p.beforeCreate=_?[].concat(_,c):[c]}return{esModule:o,exports:l,options:p}}}});
//# sourceMappingURL=18.js.map