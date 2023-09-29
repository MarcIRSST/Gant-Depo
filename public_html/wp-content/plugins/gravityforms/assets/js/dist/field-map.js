!function(){"use strict";function e(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function t(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function n(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),Object.defineProperty(e,"prototype",{writable:!1}),e}function r(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}function a(e,t){return a=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},a(e,t)}function i(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&a(e,t)}function c(e){return c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},c(e)}function o(e,t){if(t&&("object"===c(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return r(e)}function u(e){return u=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},u(e)}function l(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var s=wp.element,p=s.Component,g=(s.Fragment,wp.i18n.__,function(t){i(l,t);var r,a,c=(r=l,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=u(r);if(a){var n=u(this).constructor;e=Reflect.construct(t,arguments,n)}else e=t.apply(this,arguments);return o(this,e)});function l(){return e(this,l),c.apply(this,arguments)}return n(l,[{key:"render",value:function(){return this.props.tooltip?React.createElement("button",{type:"button",className:"gf_tooltip tooltip","aria-label":this.props.tooltip},React.createElement("i",{className:"gform-icon gform-icon--question-mark","aria-hidden":"true"})):null}}]),l}(p));function m(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function f(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?m(Object(n),!0).forEach((function(t){l(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):m(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var d=wp.element,h=d.Component,y=(d.Fragment,wp.i18n.__),v=function(t){i(l,t);var r,a,c=(r=l,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=u(r);if(a){var n=u(this).constructor;e=Reflect.construct(t,arguments,n)}else e=t.apply(this,arguments);return o(this,e)});function l(){return e(this,l),c.apply(this,arguments)}return n(l,[{key:"componentDidMount",value:function(){var e=this;this.$input=jQuery(this.input),"undefined"!=typeof form&&(this.mergeTagsObj=new gfMergeTagsObj(form,this.$input)),this.$input.on("propertychange",(function(t){e.props.updateMapping(f(f({},e.props.mapping),{},{custom_value:t.target.value}),e.props.index)}))}},{key:"componentWillUnmount",value:function(){this.$input.off("propertychange"),void 0!==this.mergeTagsObj&&this.mergeTagsObj.destroy()}},{key:"render",value:function(){var e=this,t=this.props.mergeTagSupport?"gform-settings-generic-map__custom gform-settings-input__container--with-merge-tag":"gform-settings-generic-map__custom",n=this.props.mergeTagSupport?"merge-tag-support mt-position-right":"";return React.createElement("span",{className:t},React.createElement("input",{ref:function(t){return e.input=t},id:this.props.fieldId,type:"text",className:n,value:this.props.mapping.custom_value,placeholder:this.props.valueField.placeholder,onChange:function(t){return e.props.updateMapping(f(f({},e.props.mapping),{},{custom_value:t.target.value}),e.props.index)}}),React.createElement("button",{className:"gform-settings-generic-map__reset",onClick:function(t){t.preventDefault(),e.props.updateMapping(f(f({},e.props.mapping),{},{value:"",custom_value:""}),e.props.index)}},React.createElement("span",{className:"screen-reader-text"},y("Remove Custom Value","gravityforms"))))}}]),l}(h);function _(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function b(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?_(Object(n),!0).forEach((function(t){l(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):_(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var k=wp.element,R=k.Component,O=k.Fragment,E=wp.i18n.__,w=function(t){i(l,t);var r,a,c=(r=l,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=u(r);if(a){var n=u(this).constructor;e=Reflect.construct(t,arguments,n)}else e=t.apply(this,arguments);return o(this,e)});function l(){return e(this,l),c.apply(this,arguments)}return n(l,[{key:"renderRequiredSpan",value:function(){var e=this.props.choice,t=this.getKeyInputId();return e.required?React.createElement("span",{className:"required",id:t},"*"):null}},{key:"render",value:function(){var e=this.props,t=e.isInvalid,n=e.index;return React.createElement("tr",{className:"gform-settings-generic-map__row"},React.createElement("td",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--key"},this.getKeyInput(n)),React.createElement("td",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--value"},this.getValueInput()),React.createElement("td",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--error"},t&&React.createElement("svg",{width:"22",height:"22",fill:"none",xmlns:"http://www.w3.org/2000/svg"},React.createElement("path",{d:"M11 22C4.9249 22 0 17.0751 0 11S4.9249 0 11 0s11 4.9249 11 11-4.9249 11-11 11z",fill:"#E54C3B"}),React.createElement("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M9.9317 5.0769a.1911.1911 0 00-.1909.2006l.3708 7.4158a.8895.8895 0 001.7768 0l.3708-7.4158a.1911.1911 0 00-.1909-.2006H9.9317zm2.3375 10.5769c0 .701-.5682 1.2693-1.2692 1.2693-.701 0-1.2692-.5683-1.2692-1.2693 0-.7009.5682-1.2692 1.2692-1.2692.701 0 1.2692.5683 1.2692 1.2692z",fill:"#fff"}))),React.createElement("td",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--buttons"},this.getAddButton(),this.getDeleteButton()))}},{key:"getValueInputId",value:function(){var e=this.props,t=e.inputId,n=e.inputType,r=e.index,a=e.mapping;switch(n){case"generic_map":case"dynamic_field_map":return"".concat(t,"_custom_value_").concat(r);default:return"".concat(t,"_").concat(a.key)}}},{key:"getKeyInputId",value:function(){var e=this.props,t=e.inputId,n=e.inputType,r=e.index,a=e.mapping;switch(n){case"generic_map":case"dynamic_field_map":return"".concat(t,"_custom_key_").concat(r);default:return"".concat(t,"_").concat(a.key,"_key")}}},{key:"getKeyInput",value:function(e){var t=this.props,n=t.choice,r=t.keyField,a=t.index,i=t.mapping,c=t.updateMapping,o=r.choices,u=r.display_all,l=r.placeholder,s=this.getKeyInputId();return n.required||u?React.createElement(O,null,React.createElement("label",null,n.label," ",this.renderRequiredSpan()," "),React.createElement(g,{tooltip:n.tooltip})):"gf_custom"===i.key?React.createElement("span",{className:"gform-settings-generic-map__custom"},React.createElement("input",{id:s,type:"text",value:i.custom_key,placeholder:l,onChange:function(e){return c(b(b({},i),{},{custom_key:e.target.value}),a)}}),o.length>0&&React.createElement("button",{className:"gform-settings-generic-map__reset",onClick:function(e){e.preventDefault(),c(b(b({},i),{},{key:"",custom_key:""}),a)}},React.createElement("span",{className:"screen-reader-text"},E("Remove Custom Key","gravityforms")))):React.createElement("select",{id:s,value:i.key,onChange:function(e){return c(b(b({},i),{},{key:e.target.value}),a)}},this.getKeyOptions(e))}},{key:"getKeyOptions",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2],r=!(arguments.length>3&&void 0!==arguments[3])||arguments[3],a=this.props,i=a.keyField,c=a.mappedChoices,o=a.mapping,u=i.allow_custom,l=i.allow_duplicates;t||(t=i.choices);var s=t.map((function(e){return e.name||e.value})),p="select-".concat(e,"-optiongroup-"),g=[];!s.includes("")&&n&&g.push(React.createElement("option",{key:"".concat(p,"-default"),value:"",disabled:!1},E("Select a Field","gravityforms")));for(var m=0;m<t.length;m++){var f=t[m],d=f.name||f.value;if(!f.required){var h=c.includes(d)&&d!==o.key&&!l;f.choices&&f.choices.length>0?g.push(React.createElement("optgroup",{label:f.label,key:"".concat(p,"-").concat(m)},this.getKeyOptions("".concat(e,".").concat(m),f.choices,!1,!1))):g.push(React.createElement("option",{key:"".concat(p,"-").concat(m),value:f.value,disabled:h},f.label))}}return u&&!s.includes("gf_custom")&&r&&g.push(React.createElement("option",{key:"".concat(p,"-custom"),value:"gf_custom",disabled:!1},E("Add Custom Key","gravityforms"))),g}},{key:"getValueInput",value:function(){var e=this.props,t=e.choice,n=e.index,r=e.isInvalid,a=e.mapping,i=e.updateMapping,c=e.valueField,o=e.mergeTagSupport,u=t.required,l=this.getValueInputId();return"gf_custom"===a.value?React.createElement(v,{choice:t,index:n,isInvalid:r,mapping:a,updateMapping:i,valueField:c,mergeTagSupport:o,fieldId:l}," "):React.createElement("select",{id:l,disabled:""===a.key||!a.key,value:a.value,onChange:function(e){return i(b(b({},a),{},{value:e.target.value}),n)},className:r?"gform-settings-generic-map__value--invalid":"",required:u},this.getValueOptions().map((function(e){return e.choices&&e.choices.length>0?React.createElement("optgroup",{key:e.label,label:e.label},e.choices.map((function(e){return React.createElement("option",{key:e.value,value:e.value},e.label)}))):React.createElement("option",{key:e.value,value:e.value},e.label)})))}},{key:"getValueOptions",value:function(){var e=this.props,t=e.choice,n=e.valueField,r=n.allow_custom,a=t.name&&n.choice_keys&&n.choice_keys[t.name]?n.choice_keys[t.name]:"default",i=t.choices||n.choices[a];i||(i=[]);var c=i.map((function(e){return e.value}));return r&&!c.includes("gf_custom")&&i.push({label:E("Add Custom Value","gravityforms"),value:"gf_custom",disabled:!1}),i}},{key:"getAddButton",value:function(){var e=this.props,t=e.canAdd,n=e.addMapping,r=e.index;return t?React.createElement("button",{className:"add_field_choice gform-st-icon gform-st-icon--circle-plus gform-settings-generic-map__button gform-settings-generic-map__button--add",onClick:function(e){e.preventDefault(),n(r)}},React.createElement("span",{className:"screen-reader-text"},E("Add","gravityforms"))):null}},{key:"getDeleteButton",value:function(){var e=this.props,t=e.canDelete,n=e.deleteMapping,r=e.index;return t?React.createElement("button",{className:"delete_field_choice gform-st-icon gform-st-icon--circle-minus gform-settings-generic-map__button gform-settings-generic-map__button--delete",onClick:function(e){e.preventDefault(),n(r)}},React.createElement("span",{className:"screen-reader-text"},E("Delete","gravityforms"))):null}}]),l}(R);var M=wp.element,j=M.Component,C=M.render,P=function(t){i(s,t);var a,c,l=(a=s,c=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=u(a);if(c){var n=u(this).constructor;e=Reflect.construct(t,arguments,n)}else e=t.apply(this,arguments);return o(this,e)});function s(){var t;return e(this,s),(t=l.apply(this,arguments)).state={mapping:JSON.parse(document.querySelector('[name="'.concat(t.props.input,'"]')).value)},t.addMapping=t.addMapping.bind(r(t)),t.deleteMapping=t.deleteMapping.bind(r(t)),t.getMapping=t.getMapping.bind(r(t)),t.updateMapping=t.updateMapping.bind(r(t)),t}return n(s,[{key:"componentDidMount",value:function(){this.populateRequiredMappings(),0===this.getRequiredChoices().length&&this.getMapping().length<1&&this.addMapping(0)}},{key:"addMapping",value:function(e){var t=this.props.keyField,n=t.allow_custom,r=t.choices,a=this.getMapping(),i=0===r.length&&n?"gf_custom":"";a.splice(e+1,0,{key:i,custom_key:"",value:"",custom_value:""}),this.setMapping(a)}},{key:"deleteMapping",value:function(e){var t=this.getMapping();t.splice(e,1),this.setMapping(t)}},{key:"getMapping",value:function(){return this.state.mapping}},{key:"setMapping",value:function(e){var t=this.props.input;this.setState({mapping:e}),document.querySelector('[name="'.concat(t,'"]')).value=JSON.stringify(e)}},{key:"updateMapping",value:function(e,t){var n=this.getMapping();e.key||(e.value=""),n[t]=e,this.setMapping(n)}},{key:"getChoice",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];t||(t=this.props.keyField.choices);for(var n=0;n<t.length;n++){var r=t[n],a=r.name||r.value;if(a===e)return t[n];if(r.choices){var i=this.getChoice(e,r.choices);if(i)return i}}return!1}},{key:"getMappedChoices",value:function(){return this.getMapping().filter((function(e){return e.key&&"gf_custom"!==e.key})).map((function(e){return e.key}))}},{key:"getRequiredChoices",value:function(){for(var e=this.props.keyField,t=e.choices,n=e.display_all,r=[],a=0;a<t.length;a++){var i=t[a];if((i.required||n)&&r.push(i.name||i.value),i.choices)for(var c=0;c<i.choices.length;c++){var o=i.choices[c];(o.required||n)&&r.push(o.name||o.value)}}return r}},{key:"populateRequiredMappings",value:function(){for(var e=this.getMapping(),t=this.getRequiredChoices(),n=e.map((function(e){return e.key})),r=0;r<t.length;r++)n.includes(t[r])||e.push({key:t[r],custom_key:"",value:"",custom_value:""});for(var a=0;a<e.length;a++)if(""===e[a].value){var i=this.getChoice(e[a].key);i&&"default_value"in i&&(e[a].value=i.default_value)}this.setMapping(e)}},{key:"countKeyFieldChoices",value:function(){for(var e=this.props.keyField.choices,t=0,n=0;n<e.length;n++)e[n].choices?t+=e[n].choices.length:t++;return t}},{key:"render",value:function(){var e=this,t=this.props,n=t.keyField,r=t.invalidChoices,a=t.limit,i=t.valueField,c=t.input,o=t.inputType,u=t.mergeTagSupport,l=this.getMapping(),s=this.countKeyFieldChoices();return React.createElement("table",{className:"gform-settings-generic-map__table",cellSpacing:"0",cellPadding:"0"},React.createElement("tbody",null,React.createElement("tr",{className:"gform-settings-generic-map__row"},React.createElement("th",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--heading gform-settings-generic-map__column--key"},n.title),React.createElement("th",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--heading gform-settings-generic-map__column--value"},i.title),React.createElement("th",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--heading gform-settings-generic-map__column--error"}),React.createElement("th",{className:"gform-settings-generic-map__column gform-settings-generic-map__column--heading gform-settings-generic-map__column--buttons"})),l.map((function(t,p){var g=e.getChoice(t.key);return React.createElement(w,{key:p,mapping:t,choice:g,mappedChoices:e.getMappedChoices(),isInvalid:t.key&&r.includes(t.key),keyField:n,valueField:i,canAdd:n.allow_custom&&(0===a||l.length<=a)||!n.allow_custom&&l.length<s,canDelete:l.length>1&&!g.required&&!n.display_all,addMapping:e.addMapping,deleteMapping:e.deleteMapping,updateMapping:e.updateMapping,index:p,inputId:c,inputType:o,mergeTagSupport:u})}))))}}]),s}(j);window.initializeFieldMap=function(e,t){C(React.createElement(P,t),document.getElementById(e))}}();