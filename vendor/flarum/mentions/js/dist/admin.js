(()=>{var e={n:t=>{var r=t&&t.__esModule?()=>t.default:()=>t;return e.d(r,{a:r}),r},d:(t,r)=>{for(var a in r)e.o(r,a)&&!e.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:r[a]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};(()=>{"use strict";e.r(t);const r=flarum.core.compat["admin/app"];var a=e.n(r);a().initializers.add("flarum-mentions",(function(){a().extensionData.for("flarum-mentions").registerSetting({setting:"flarum-mentions.allow_username_format",type:"boolean",label:a().translator.trans("flarum-mentions.admin.settings.allow_username_format_label"),help:a().translator.trans("flarum-mentions.admin.settings.allow_username_format_text")}).registerPermission({permission:"mentionGroups",label:a().translator.trans("flarum-mentions.admin.permissions.mention_groups_label"),icon:"fas fa-at"},"start")}))})(),module.exports=t})();
//# sourceMappingURL=admin.js.map