(window.webpackJsonp=window.webpackJsonp||[]).push([[5],{"10xp":function(e,t,a){e.exports={siteHeader:"header-module--site-header--9whQc",siteHeaderInner:"header-module--site-header-inner--15DhC",siteTitle:"header-module--site-title--3za9j",siteName:"header-module--site-name--3jzyt",siteDescription:"header-module--site-description--2smfi",siteNav:"header-module--site-nav--1DWaf",open:"header-module--open--2szkW",siteNavToggle:"header-module--site-nav-toggle--3CW42"}},BEeP:function(e,t,a){e.exports={siteFooter:"footer-module--site-footer--2ibwT"}},Bl7J:function(e,t,a){"use strict";var n=a("q1tI"),i=a.n(n),r=a("Wbzz"),s=a("HTeT"),l=a.n(s),o=function(e){var t=e.children;return i.a.createElement("div",{className:l.a.container},t)},m=a("10xp"),c=a.n(m).a,u=function(e){var t=e.menuLinks,a=e.siteTitle,s=e.siteDescription,l=Object(n.useState)(!1),m=l[0],u=l[1];return i.a.createElement("header",{className:c.siteHeader},i.a.createElement(o,null,i.a.createElement("div",{className:c.siteHeaderInner},i.a.createElement(r.Link,{className:c.siteTitle,to:"/"},i.a.createElement("span",{className:c.siteName},a),i.a.createElement("span",{className:c.siteDescription},s)),i.a.createElement("div",{className:c.siteNav},i.a.createElement("button",{className:c.siteNavToggle,open:m,onClick:function(){return u(!m)}},"☰"),i.a.createElement("ul",{className:m?c.open:""},t.map((function(e){return i.a.createElement("li",{key:e.name},e.link.startsWith("//")||e.link.startsWith("mailto:")?i.a.createElement("a",{href:e.link},e.name):i.a.createElement(r.Link,{to:e.link},e.name))})))))))};u.defaultProps={siteTitle:""};var d=u,p=(a("XjQp"),a("BEeP")),E=a.n(p);t.a=function(e){var t=e.children,a=Object(r.useStaticQuery)("429448491");return i.a.createElement("div",{className:l.a.siteWrapper},i.a.createElement(d,{menuLinks:a.site.siteMetadata.menuLinks,siteTitle:a.site.siteMetadata.title,siteDescription:a.site.siteMetadata.description}),i.a.createElement("div",{className:l.a.siteMain},i.a.createElement("main",{className:l.a.container},t)),i.a.createElement("footer",{className:E.a.siteFooter},i.a.createElement("div",{className:l.a.container},"© ",(new Date).getFullYear(),", Dantilse")))}},HTeT:function(e,t,a){e.exports={siteWrapper:"layout-container-module--site-wrapper--3vpeH",container:"layout-container-module--container--n4O8g",siteMain:"layout-container-module--site-main--190Y1"}},XjQp:function(e,t,a){},"le+J":function(e,t,a){e.exports={postItem:"post-item-preview-module--post-item--3Es2N",postItemTitle:"post-item-preview-module--post-item-title--1G297",postItemMetadata:"post-item-preview-module--post-item-metadata--Zjo5-",postItemExcerpt:"post-item-preview-module--post-item-excerpt--oiKwh"}},vx99:function(e,t,a){"use strict";a.r(t);var n=a("q1tI"),i=a.n(n),r=a("Wbzz"),s=a("Bl7J"),l=a("le+J"),o=a.n(l),m=function(e){var t=e.id,a=e.title,n=e.date,s=e.excerpt,l=e.slug;return i.a.createElement(r.Link,{className:o.a.postItem,to:l,key:t},i.a.createElement("h3",{className:o.a.postItemTitle},a),i.a.createElement("p",{className:o.a.postItemMetadata},new Date(n).toLocaleDateString("en-US",{year:"numeric",month:"long",day:"numeric"})),i.a.createElement("p",{className:o.a.postItemExcerpt},s))};t.default=function(){return i.a.createElement(s.a,null,i.a.createElement("div",null,i.a.createElement("h1",null,"Blog"),i.a.createElement(r.StaticQuery,{query:"79524178",render:function(e){return i.a.createElement(i.a.Fragment,null,i.a.createElement("h4",null,e.allMarkdownRemark.totalCount," posts"),e.allMarkdownRemark.edges.map((function(e){var t=e.node;return i.a.createElement(m,{id:t.id,title:t.frontmatter.title,date:t.frontmatter.date,excerpt:t.excerpt,slug:t.fields.slug})})))}})))}}}]);
//# sourceMappingURL=component---src-pages-blog-js-062560727c1990be79e2.js.map