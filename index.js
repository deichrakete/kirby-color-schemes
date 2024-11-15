(function(){"use strict";function i(l,e,t,s,m,f,u,h){var c=typeof l=="function"?l.options:l;return e&&(c.render=e,c.staticRenderFns=t,c._compiled=!0),c._scopeId="data-v-"+f,{exports:l,options:c}}const o={name:"ColorScheme",props:{value:{type:String,default:""},options:{type:Array,default:()=>[]}},methods:{getSchemeName(){return this.checkIfSchemaExists(),this.options.schemes.find(l=>l.name===this.value).label},checkIfSchemaExists(){this.options.schemes.find(e=>e.name===this.value)||(this.value="default",this.$emit("input","default"))}},computed:{},mounted(){}};var r=function(){var e=this,t=e._self._c;return t("div",[t("k-field",{attrs:{id:"k-field-color-scheme",label:e.$t("deichrakete.color-schemes.title")}},[t("k-grid",{staticStyle:{gap:"0.8rem","--columns":"6"},attrs:{id:"k-field-color-scheme"}},e._l(e.options.schemes,function(s){return t("div",{key:s,staticClass:"k-box",class:{"k-active":e.value===s.name},style:{background:s.colors.background,color:s.colors.text},attrs:{align:"center",title:s.label},on:{click:function(m){return e.$emit("input",s.name)}}},[t("k-headline",{staticClass:"k-field-color-scheme-font"},[e._v("Aa")]),t("k-grid",{staticClass:"k-field-color-scheme-buttons"},[t("div",{style:{borderColor:s.colors.primary,justifySelf:"center"}}),t("div",{style:{borderColor:s.colors.primary,background:s.colors.primary,justifySelf:"center"}})])],1)}),0),t("footer",{staticClass:"k-field-footer"},[t("div",{staticClass:"k-help k-field-help k-text"},[e._v(e._s(e.getSchemeName()))])])],1)],1)},a=[],n=i(o,r,a,!1,null,"aee686df");const d=n.exports;panel.plugin("deichrakete/color-schemes",{fields:{colorscheme:d}})})();
