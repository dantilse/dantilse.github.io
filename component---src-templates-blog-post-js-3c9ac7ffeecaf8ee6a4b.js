(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{"10xp":function(e,t,a){e.exports={siteHeader:"header-module--site-header--9whQc",siteHeaderInner:"header-module--site-header-inner--15DhC",siteTitle:"header-module--site-title--3za9j",siteName:"header-module--site-name--3jzyt",siteDescription:"header-module--site-description--2smfi",siteNav:"header-module--site-nav--1DWaf",open:"header-module--open--2szkW",siteNavToggle:"header-module--site-nav-toggle--3CW42"}},BEeP:function(e,t,a){e.exports={siteFooter:"footer-module--site-footer--2ibwT"}},Bl7J:function(e,t,a){"use strict";var n=a("q1tI"),i=a.n(n),r=a("Wbzz"),s=a("HTeT"),l=a.n(s),o=function(e){var t=e.children;return i.a.createElement("div",{className:l.a.container},t)},c=a("10xp"),m=a.n(c).a,u=function(e){var t=e.menuLinks,a=e.siteTitle,s=e.siteDescription,l=Object(n.useState)(!1),c=l[0],u=l[1];return i.a.createElement("header",{className:m.siteHeader},i.a.createElement(o,null,i.a.createElement("div",{className:m.siteHeaderInner},i.a.createElement(r.Link,{className:m.siteTitle,to:"/"},i.a.createElement("span",{className:m.siteName},a),i.a.createElement("span",{className:m.siteDescription},s)),i.a.createElement("div",{className:m.siteNav},i.a.createElement("button",{className:m.siteNavToggle,open:c,onClick:function(){return u(!c)}},"☰"),i.a.createElement("ul",{className:c?m.open:""},t.map((function(e){return i.a.createElement("li",{key:e.name},e.link.startsWith("//")||e.link.startsWith("mailto:")?i.a.createElement("a",{href:e.link},e.name):i.a.createElement(r.Link,{to:e.link},e.name))})))))))};u.defaultProps={siteTitle:""};var d=u,p=(a("XjQp"),a("BEeP")),E=a.n(p);t.a=function(e){var t=e.children,a=Object(r.useStaticQuery)("429448491");return i.a.createElement("div",{className:l.a.siteWrapper},i.a.createElement(d,{menuLinks:a.site.siteMetadata.menuLinks,siteTitle:a.site.siteMetadata.title,siteDescription:a.site.siteMetadata.description}),i.a.createElement("div",{className:l.a.siteMain},i.a.createElement("main",{className:l.a.container},t)),i.a.createElement("footer",{className:E.a.siteFooter},i.a.createElement("div",{className:l.a.container},"© ",(new Date).getFullYear(),", Dantilse")))}},HTeT:function(e,t,a){e.exports={siteWrapper:"layout-container-module--site-wrapper--3vpeH",container:"layout-container-module--container--n4O8g",siteMain:"layout-container-module--site-main--190Y1"}},XjQp:function(e,t,a){},yZlL:function(e,t,a){"use strict";a.r(t),a.d(t,"query",(function(){return l}));var n=a("q1tI"),i=a.n(n),r=a("Wbzz"),s=a("Bl7J");t.default=function(e){var t=e.data.markdownRemark;return i.a.createElement(s.a,null,i.a.createElement("div",null,i.a.createElement("h1",null,t.frontmatter.title),i.a.createElement("div",{dangerouslySetInnerHTML:{__html:t.html}}),i.a.createElement(r.Link,{to:"/blog/",style:{display:"inline-block",marginTop:30,marginBottom:60}},"Back to Blog")))};var l="471609186"}}]);
//# sourceMappingURL=component---src-templates-blog-post-js-3c9ac7ffeecaf8ee6a4b.js.map