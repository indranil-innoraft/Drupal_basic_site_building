!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.CKEditor5=t():(e.CKEditor5=e.CKEditor5||{},e.CKEditor5.openai=t())}(self,(()=>(()=>{var e={"ckeditor5/src/core.js":(e,t,n)=>{e.exports=n("dll-reference CKEditor5.dll")("./src/core.js")},"ckeditor5/src/ui.js":(e,t,n)=>{e.exports=n("dll-reference CKEditor5.dll")("./src/ui.js")},"ckeditor5/src/utils.js":(e,t,n)=>{e.exports=n("dll-reference CKEditor5.dll")("./src/utils.js")},"dll-reference CKEditor5.dll":e=>{"use strict";e.exports=CKEditor5.dll}},t={};function n(o){var i=t[o];if(void 0!==i)return i.exports;var s=t[o]={exports:{}};return e[o](s,s.exports,n),s.exports}n.d=(e,t)=>{for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var o={};return(()=>{"use strict";n.d(o,{default:()=>w});var e=n("ckeditor5/src/core.js"),t=n("ckeditor5/src/ui.js");var i=n("ckeditor5/src/utils.js");class s extends t.View{constructor(t){super(t),this.promptInputView=this._createInput("Insert text from this prompt:"),this.saveButtonView=this._createButton("Submit",e.icons.check,"ck-button-save"),this.saveButtonView.type="submit",this.cancelButtonView=this._createButton("Cancel",e.icons.cancel,"ck-button-cancel"),this.cancelButtonView.delegate("execute").to(this,"cancel"),this.childViews=this.createCollection([this.promptInputView,this.saveButtonView,this.cancelButtonView]),this.setTemplate({tag:"form",attributes:{class:["ck","ck-openai-completion-form","ck-openai-form"],tabindex:"-1"},children:this.childViews})}_createInput(e){const n=new t.LabeledFieldView(this.locale,t.createLabeledInputText);return n.label=e,n}_createButton(e,n,o){const i=new t.ButtonView;return i.set({label:e,icon:n,tooltip:!0,class:o}),i}render(){super.render(),(0,t.submitHandler)({view:this})}focus(){this.childViews.first.focus()}}class l extends e.Command{constructor(e,n){super(e),this._balloon=this.editor.plugins.get(t.ContextualBalloon),this.formView=this._createFormView(),this._config=n}execute(e={}){this._showUI()}_createFormView(){const e=this.editor,n=new s(e.locale);return this.listenTo(n,"submit",(()=>{const t=n.promptInputView.fieldView.element.value;e.model.change((n=>{fetch(drupalSettings.path.baseUrl+"api/openai-ckeditor/completion",{method:"POST",credentials:"same-origin",body:JSON.stringify({prompt:t,options:this._config})}).then((e=>e.json())).then((t=>e.model.insertContent(n.createText(t.text)))).then((()=>this._hideUI()))}))})),this.listenTo(n,"cancel",(()=>{this._hideUI()})),(0,t.clickOutsideHandler)({emitter:n,activator:()=>this._balloon.visibleView===n,contextElements:[this._balloon.view.element],callback:()=>this._hideUI()}),n}_getBalloonPositionData(){const e=this.editor.editing.view,t=e.document;let n=null;return n=()=>e.domConverter.viewRangeToDom(t.selection.getFirstRange()),{target:n}}_showUI(){this._balloon.add({view:this.formView,position:this._getBalloonPositionData()}),this.formView.focus()}_hideUI(){this.formView.promptInputView.fieldView.value="",this.formView.element.reset(),this._balloon.remove(this.formView),this.editor.editing.view.focus()}}class a extends e.Command{execute(){window.open("https://www.drupal.org/project/issues/openai?categories=All","_blank")}}class c extends t.View{constructor(t){super(t),this.languageInputView=this._createInput("Translate to (enter language):"),this.saveButtonView=this._createButton("Submit",e.icons.check,"ck-button-save"),this.saveButtonView.type="submit",this.cancelButtonView=this._createButton("Cancel",e.icons.cancel,"ck-button-cancel"),this.cancelButtonView.delegate("execute").to(this,"cancel"),this.childViews=this.createCollection([this.languageInputView,this.saveButtonView,this.cancelButtonView]),this.setTemplate({tag:"form",attributes:{class:["ck","ck-openai-translation-form","ck-openai-form"],tabindex:"-1"},children:this.childViews})}_createInput(e){const n=new t.LabeledFieldView(this.locale,t.createLabeledInputText);return n.label=e,n}_createButton(e,n,o){const i=new t.ButtonView;return i.set({label:e,icon:n,tooltip:!0,class:o}),i}render(){super.render(),(0,t.submitHandler)({view:this})}focus(){this.childViews.first.focus()}}class r extends e.Command{constructor(e,n){super(e),this._balloon=this.editor.plugins.get(t.ContextualBalloon),this.formView=this._createFormView(),this._config=n}execute(e={}){this._showUI()}_createFormView(){const e=this.editor,n=new c(e.locale);return this.listenTo(n,"submit",(()=>{const t=e.model.document.selection.getFirstRange();let o=null;for(const e of t.getItems())o=e.data;const i="Translate the selected text into "+n.languageInputView.fieldView.element.value+": "+o;e.model.change((n=>{fetch(drupalSettings.path.baseUrl+"api/openai-ckeditor/completion",{method:"POST",credentials:"same-origin",body:JSON.stringify({prompt:i,options:this._config})}).then((e=>e.json())).then((o=>e.model.insertContent(e.model.insertContent(n.createText(o.text),t)))).then((()=>this._hideUI()))}))})),this.listenTo(n,"cancel",(()=>{this._hideUI()})),(0,t.clickOutsideHandler)({emitter:n,activator:()=>this._balloon.visibleView===n,contextElements:[this._balloon.view.element],callback:()=>this._hideUI()}),n}_getBalloonPositionData(){const e=this.editor.editing.view,t=e.document;let n=null;return n=()=>e.domConverter.viewRangeToDom(t.selection.getFirstRange()),{target:n}}_showUI(){this._balloon.add({view:this.formView,position:this._getBalloonPositionData()}),this.formView.focus()}_hideUI(){this.formView.languageInputView.fieldView.value="",this.formView.element.reset(),this._balloon.remove(this.formView),this.editor.editing.view.focus()}}class d extends t.View{constructor(t){super(t),this.toneInputView=this._createInput("Enter an adjective:"),this.saveButtonView=this._createButton("Submit",e.icons.check,"ck-button-save"),this.saveButtonView.type="submit",this.cancelButtonView=this._createButton("Cancel",e.icons.cancel,"ck-button-cancel"),this.cancelButtonView.delegate("execute").to(this,"cancel"),this.childViews=this.createCollection([this.toneInputView,this.saveButtonView,this.cancelButtonView]),this.setTemplate({tag:"form",attributes:{class:["ck","ck-openai-tone-form","ck-openai-form"],tabindex:"-1"},children:this.childViews})}_createInput(e){const n=new t.LabeledFieldView(this.locale,t.createLabeledInputText);return n.label=e,n}_createButton(e,n,o){const i=new t.ButtonView;return i.set({label:e,icon:n,tooltip:!0,class:o}),i}render(){super.render(),(0,t.submitHandler)({view:this})}focus(){this.childViews.first.focus()}}class m extends e.Command{constructor(e,n){super(e),this._balloon=this.editor.plugins.get(t.ContextualBalloon),this.formView=this._createFormView(),this._config=n}execute(e={}){this._showUI()}_createFormView(){const e=this.editor,n=new d(e.locale);return this.listenTo(n,"submit",(()=>{const t=e.model.document.selection.getFirstRange();let o=null;for(const e of t.getItems())o=e.data;const i="Change the tone of the following text to be more "+n.toneInputView.fieldView.element.value+": "+o;e.model.change((n=>{fetch(drupalSettings.path.baseUrl+"api/openai-ckeditor/completion",{method:"POST",credentials:"same-origin",body:JSON.stringify({prompt:i,options:this._config})}).then((e=>e.json())).then((o=>e.model.insertContent(e.model.insertContent(n.createText(o.text),t)))).then((()=>this._hideUI()))}))})),this.listenTo(n,"cancel",(()=>{this._hideUI()})),(0,t.clickOutsideHandler)({emitter:n,activator:()=>this._balloon.visibleView===n,contextElements:[this._balloon.view.element],callback:()=>this._hideUI()}),n}_getBalloonPositionData(){const e=this.editor.editing.view,t=e.document;let n=null;return n=()=>e.domConverter.viewRangeToDom(t.selection.getFirstRange()),{target:n}}_showUI(){this._balloon.add({view:this.formView,position:this._getBalloonPositionData()}),this.formView.focus()}_hideUI(){this.formView.toneInputView.fieldView.value="",this.formView.element.reset(),this._balloon.remove(this.formView),this.editor.editing.view.focus()}}class h extends e.Command{constructor(e,t){super(e),this._config=t}execute(e={}){const t=this.editor,n=t.model.document.selection.getFirstRange();let o=null;for(const e of n.getItems())o=e.data;const i="Summarize the following text into something more compact: "+o;t.model.change((e=>{fetch(drupalSettings.path.baseUrl+"api/openai-ckeditor/completion",{method:"POST",credentials:"same-origin",body:JSON.stringify({prompt:i,options:this._config})}).then((e=>e.json())).then((o=>t.model.insertContent(t.model.insertContent(e.createText(o.text),n))))}))}}class u extends e.Plugin{init(){const e=this.editor,n=this.editor.config.get("openai_ckeditor_openai");e.commands.add("CompletionCommand",new l(e,n.completion)),e.commands.add("TranslateCommand",new r(e,n.completion)),e.commands.add("ToneCommand",new m(e,n.completion)),e.commands.add("SummarizeCommand",new h(e,n.completion)),e.commands.add("HelpCommand",new a(e)),e.ui.componentFactory.add("openai",(e=>{const o=new i.Collection;o.add({type:"button",model:new t.Model({isEnabled:n.completion.enabled,label:"Text Completion",withText:!0,command:"CompletionCommand",group:n.completion})}),o.add({type:"button",model:new t.Model({isEnabled:n.completion.enabled,label:"Adjust tone/voice",withText:!0,command:"ToneCommand",group:n.completion})}),o.add({type:"button",model:new t.Model({isEnabled:n.completion.enabled,label:"Summarize",withText:!0,command:"SummarizeCommand",group:n.completion})}),o.add({type:"button",model:new t.Model({isEnabled:n.completion.enabled,label:"Translate",withText:!0,command:"TranslateCommand",group:n.completion})}),o.add({type:"button",model:new t.Model({isEnabled:!1,label:"Ask ChatGPT",withText:!0,command:"",group:{}})}),o.add({type:"button",model:new t.Model({isEnabled:!1,label:"Generate image",withText:!0,command:"",group:{}})}),o.add({type:"button",model:new t.Model({isEnabled:!1,label:"Sentiment analysis",withText:!0,command:"",group:{}})}),o.add({type:"button",model:new t.Model({label:"Help & Support",withText:!0,command:"HelpCommand",group:{}})});const s=(0,t.createDropdown)(e,t.DropdownButtonView);return(0,t.addListToDropdown)(s,o),s.buttonView.set({label:"OpenAI",class:"openai-dropdown",icon:'<?xml version="1.0" standalone="no"?>\n<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"\n "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">\n<svg version="1.0" xmlns="http://www.w3.org/2000/svg"\n width="2138.000000pt" height="2136.000000pt" viewBox="0 0 2138.000000 2136.000000"\n preserveAspectRatio="xMidYMid meet">\n\n<g transform="translate(0.000000,2136.000000) scale(0.100000,-0.100000)"\nfill="#000000" stroke="none">\n<path d="M9405 20200 c-196 -7 -294 -17 -445 -46 -41 -8 -118 -21 -170 -29\n-52 -9 -142 -29 -200 -45 -58 -16 -136 -34 -175 -40 -103 -16 -167 -36 -232\n-75 -34 -20 -105 -47 -173 -65 -77 -21 -148 -49 -215 -84 -55 -30 -130 -63\n-166 -75 -36 -12 -104 -45 -150 -75 -46 -29 -110 -63 -143 -76 -32 -13 -86\n-44 -120 -68 -33 -25 -95 -66 -136 -90 -41 -24 -86 -54 -100 -66 -14 -13 -63\n-48 -110 -79 -47 -32 -132 -100 -190 -152 -58 -52 -137 -120 -176 -150 -39\n-30 -101 -91 -139 -135 -37 -44 -103 -113 -147 -153 -44 -39 -94 -92 -111\n-117 -17 -24 -86 -108 -152 -185 -67 -78 -135 -164 -150 -191 -16 -27 -47 -76\n-70 -109 -24 -33 -62 -94 -87 -135 -24 -41 -60 -96 -80 -121 -19 -26 -50 -82\n-68 -125 -18 -44 -54 -111 -80 -151 -26 -39 -58 -102 -70 -140 -12 -37 -39\n-104 -60 -148 -21 -45 -52 -128 -70 -185 -38 -124 -64 -155 -162 -190 -34 -13\n-109 -40 -165 -61 -56 -21 -147 -50 -202 -63 -55 -14 -144 -44 -198 -66 -155\n-66 -213 -87 -285 -105 -37 -10 -94 -33 -125 -52 -78 -48 -95 -57 -187 -98\n-44 -19 -102 -53 -130 -73 -28 -21 -82 -51 -120 -67 -38 -16 -95 -49 -125 -75\n-100 -82 -218 -169 -288 -211 -37 -22 -88 -60 -113 -84 -25 -23 -70 -61 -100\n-83 -131 -97 -605 -589 -663 -689 -20 -35 -56 -89 -81 -120 -25 -32 -75 -96\n-112 -143 -37 -47 -82 -118 -100 -158 -19 -41 -47 -93 -63 -115 -16 -23 -51\n-87 -79 -142 -27 -55 -66 -126 -86 -159 -19 -32 -56 -108 -82 -170 -26 -61\n-59 -136 -75 -167 -15 -31 -40 -98 -55 -150 -15 -52 -42 -129 -59 -171 -38\n-89 -77 -233 -99 -359 -26 -150 -65 -305 -98 -391 l-32 -83 -2 -560 c-2 -308\n1 -603 6 -655 6 -64 22 -137 49 -225 23 -71 55 -204 72 -295 42 -231 72 -346\n108 -418 17 -33 45 -112 62 -174 16 -62 42 -133 56 -158 42 -73 69 -132 88\n-190 21 -66 44 -113 85 -173 16 -25 47 -83 69 -129 21 -47 55 -107 76 -134 21\n-27 55 -85 76 -129 20 -44 51 -96 69 -115 17 -19 50 -60 73 -90 23 -30 60 -77\n83 -105 22 -27 55 -71 73 -97 17 -26 55 -74 82 -105 99 -113 105 -148 56 -328\n-14 -49 -28 -108 -32 -130 -3 -22 -27 -83 -52 -135 l-46 -95 -8 -160 c-8 -170\n-23 -346 -39 -485 -17 -147 -8 -498 20 -815 6 -66 15 -190 19 -275 l7 -155 47\n-95 c35 -71 51 -122 66 -202 12 -59 33 -140 47 -180 15 -40 56 -158 91 -263\n43 -128 77 -210 103 -250 22 -34 53 -99 70 -145 17 -47 50 -114 73 -150 24\n-36 59 -100 79 -142 20 -43 57 -99 82 -126 29 -31 56 -75 75 -122 17 -40 41\n-85 54 -99 60 -66 71 -79 108 -131 124 -174 448 -537 585 -653 33 -29 116\n-103 184 -165 67 -61 148 -126 179 -144 31 -17 76 -47 101 -68 25 -20 68 -51\n95 -70 28 -18 70 -50 95 -70 44 -37 142 -90 190 -105 14 -4 47 -23 75 -43 27\n-19 92 -55 144 -79 52 -24 116 -59 141 -78 58 -43 112 -66 218 -93 45 -12 122\n-42 171 -67 66 -32 118 -50 197 -66 60 -11 138 -34 174 -49 136 -60 355 -100\n760 -142 379 -39 716 -45 890 -15 58 10 172 22 255 27 87 5 186 17 236 29 48\n12 93 19 100 17 8 -2 27 -7 42 -10 28 -7 293 -246 370 -334 44 -51 77 -79 132\n-112 22 -14 72 -52 110 -85 39 -33 90 -76 115 -96 25 -20 61 -51 80 -68 19\n-17 64 -46 100 -65 36 -19 84 -49 105 -67 22 -17 72 -47 110 -66 39 -19 92\n-51 118 -69 26 -19 85 -52 130 -73 45 -21 112 -56 149 -79 37 -23 111 -56 165\n-73 54 -17 139 -51 188 -75 63 -31 142 -58 262 -88 119 -30 199 -57 258 -86\n81 -41 91 -43 232 -56 82 -7 186 -20 233 -28 245 -44 394 -56 713 -56 320 0\n416 7 664 49 65 11 181 25 258 31 178 13 219 22 330 69 49 21 131 49 180 61\n108 26 217 64 343 119 51 23 98 41 105 41 36 0 119 34 180 74 37 25 103 56\n145 70 45 15 112 49 159 81 46 30 85 55 88 55 20 0 134 66 173 100 25 22 79\n59 121 82 42 23 94 58 116 78 22 20 60 51 85 70 25 18 63 50 85 70 22 20 67\n53 100 73 68 40 451 415 518 507 42 57 99 125 200 238 32 36 75 98 94 136 20\n39 58 97 85 130 27 32 60 79 75 105 14 25 39 69 56 96 46 75 223 426 237 471\n7 21 34 80 60 129 27 50 60 132 75 184 55 197 62 203 354 286 102 30 200 59\n216 65 17 6 81 22 143 35 107 23 128 32 235 98 25 15 83 41 129 57 45 16 119\n50 163 75 44 25 111 55 148 66 55 16 81 31 128 75 32 29 92 70 133 90 41 20\n96 54 122 76 27 22 69 50 94 63 25 13 65 41 90 62 25 21 73 61 108 87 34 26\n115 98 180 159 64 62 145 133 179 159 33 26 90 85 126 131 36 46 101 116 145\n155 44 40 108 112 142 160 62 89 116 160 218 290 31 40 59 78 61 85 12 40 65\n132 105 183 26 34 59 95 77 140 16 43 50 108 74 144 26 37 58 103 75 154 16\n49 48 117 70 151 35 54 80 184 80 232 0 8 16 51 36 96 40 92 93 289 123 458\n11 63 32 155 46 204 80 279 74 231 81 633 7 428 -7 837 -31 927 -9 33 -27 92\n-41 130 -13 39 -33 126 -44 195 -28 164 -81 375 -123 486 -19 49 -44 125 -56\n169 -12 44 -39 112 -60 151 -21 39 -58 119 -81 178 -23 59 -61 135 -83 169\n-22 34 -53 91 -70 127 -16 35 -44 88 -63 117 -19 29 -50 86 -70 125 -20 40\n-60 102 -89 138 -29 36 -65 85 -80 110 -16 25 -47 68 -70 97 -24 29 -59 81\n-79 117 -20 36 -56 82 -80 101 -23 20 -50 49 -59 64 -24 42 -37 111 -28 156\n22 106 75 276 102 324 39 68 55 151 64 316 3 72 15 218 26 325 25 262 25 591\n0 867 -11 115 -23 258 -26 318 -9 159 -22 219 -65 315 -21 47 -44 112 -51 145\n-27 130 -91 350 -118 404 -27 52 -54 133 -81 237 -5 22 -29 70 -52 105 -23 35\n-58 102 -77 149 -20 47 -58 121 -84 165 -27 44 -68 114 -91 155 -85 149 -146\n246 -184 290 -21 25 -60 77 -87 115 -27 39 -63 88 -80 110 -17 22 -47 66 -66\n99 -23 40 -126 151 -336 361 -262 263 -310 307 -365 333 -35 17 -90 53 -123\n81 -141 118 -244 193 -295 218 -30 14 -75 40 -100 58 -25 18 -72 47 -105 66\n-33 18 -87 51 -119 72 -32 22 -97 55 -144 74 -47 19 -124 54 -171 77 -47 24\n-138 60 -201 81 -63 20 -135 48 -161 60 -38 20 -167 62 -324 106 -16 4 -68 13\n-114 18 -46 6 -145 31 -221 56 -158 51 -214 58 -631 76 -258 12 -442 9 -849\n-10 -164 -9 -196 -13 -286 -41 -89 -27 -107 -30 -142 -20 -50 13 -139 79 -213\n157 -85 89 -290 281 -374 350 -27 23 -73 64 -101 91 -28 27 -69 55 -90 62 -22\n7 -70 36 -109 65 -38 29 -92 64 -120 78 -27 14 -76 45 -108 70 -32 25 -88 58\n-125 73 -73 30 -106 51 -167 101 -24 21 -67 42 -110 55 -38 11 -109 40 -157\n64 -48 24 -149 64 -224 89 -74 25 -170 64 -212 86 -53 27 -99 43 -147 50 -71\n11 -186 36 -284 64 -30 8 -138 28 -240 45 -102 17 -220 37 -261 45 -91 17\n-588 25 -885 15z m850 -1234 c146 -22 281 -53 382 -87 48 -17 128 -39 177 -50\n64 -13 111 -32 165 -63 43 -25 122 -58 181 -76 58 -17 134 -49 170 -70 36 -20\n99 -54 140 -75 41 -20 98 -54 125 -75 28 -21 78 -54 113 -74 77 -43 205 -139\n232 -173 11 -14 20 -35 20 -47 0 -71 -124 -165 -301 -230 -25 -9 -70 -37 -99\n-62 -29 -25 -90 -64 -134 -86 -45 -22 -99 -53 -121 -68 -22 -15 -85 -50 -140\n-77 -55 -28 -120 -64 -145 -80 -25 -17 -67 -42 -95 -55 -27 -13 -87 -50 -133\n-81 -46 -31 -95 -60 -110 -63 -47 -12 -99 -42 -157 -93 -36 -32 -84 -60 -136\n-81 -43 -18 -98 -47 -122 -65 -23 -17 -62 -42 -87 -55 -25 -13 -85 -49 -135\n-80 -49 -31 -108 -63 -130 -70 -57 -18 -83 -33 -152 -85 -34 -25 -95 -61 -135\n-80 -40 -18 -98 -53 -129 -77 -40 -31 -83 -53 -143 -72 -67 -21 -98 -38 -140\n-75 -30 -26 -79 -60 -108 -76 -29 -15 -80 -47 -113 -70 -33 -23 -95 -57 -137\n-74 -42 -18 -96 -47 -120 -65 -63 -47 -87 -61 -143 -82 -27 -10 -78 -41 -114\n-67 -35 -27 -100 -67 -145 -88 -45 -21 -102 -53 -126 -72 -25 -19 -70 -47\n-100 -62 -72 -37 -194 -155 -225 -219 -14 -28 -35 -87 -47 -131 l-23 -80 -2\n-2650 c-2 -1457 -3 -2656 -3 -2663 0 -8 -13 -27 -29 -43 -25 -25 -37 -29 -85\n-29 -69 0 -86 7 -170 69 -37 28 -98 65 -134 82 -36 17 -91 47 -121 68 -31 21\n-82 50 -113 66 -31 16 -81 49 -110 74 -53 45 -84 62 -181 96 -26 9 -73 36\n-105 60 -31 23 -86 57 -122 75 -36 18 -92 52 -125 75 -33 23 -105 62 -159 85\n-120 53 -207 129 -226 198 -16 61 -8 4704 9 4782 6 30 18 114 27 185 9 83 27\n168 48 235 19 58 39 137 46 175 7 39 25 96 41 128 16 31 42 83 58 115 16 31\n37 94 46 139 10 45 32 111 50 145 106 206 150 286 171 312 14 16 43 61 64 100\n22 39 62 98 90 131 29 33 60 76 70 95 66 127 498 564 664 671 39 26 87 63 106\n84 19 20 67 55 105 77 39 22 93 58 120 78 28 21 83 51 122 67 39 17 102 51\n140 75 37 25 84 50 103 56 128 39 201 69 254 102 46 29 90 46 171 65 61 14\n135 35 165 46 30 12 98 29 150 40 52 10 129 26 170 35 127 27 250 33 650 29\n273 -3 414 -8 485 -19z m4505 -1474 c180 -10 204 -15 341 -70 42 -17 132 -43\n200 -57 186 -38 233 -52 307 -94 37 -21 105 -50 153 -64 47 -15 113 -45 149\n-68 35 -22 101 -58 148 -80 50 -23 105 -58 134 -84 26 -25 77 -59 112 -75 35\n-15 81 -44 103 -63 21 -19 69 -58 107 -87 131 -98 322 -279 477 -452 75 -83\n253 -318 276 -363 9 -16 39 -61 68 -100 29 -38 66 -102 83 -142 16 -40 47 -95\n67 -124 21 -28 65 -115 98 -192 32 -78 70 -167 83 -198 13 -31 35 -110 48\n-175 15 -75 36 -147 59 -194 43 -93 52 -128 67 -260 6 -58 20 -159 31 -225 44\n-272 32 -811 -22 -921 -35 -74 -123 -85 -203 -25 -81 60 -142 98 -196 120 -30\n13 -79 41 -109 64 -30 22 -91 58 -135 80 -45 22 -94 51 -110 64 -16 13 -64 42\n-107 63 -43 22 -103 60 -134 86 -32 25 -89 59 -127 75 -39 16 -98 48 -132 73\n-33 24 -90 58 -126 76 -36 18 -84 48 -108 67 -24 20 -93 57 -154 84 -61 27\n-121 58 -132 68 -12 11 -59 41 -106 66 -47 26 -116 71 -155 100 -38 29 -100\n64 -137 78 -38 14 -90 41 -117 61 -26 20 -82 52 -122 72 -41 20 -95 54 -121\n76 -26 22 -84 55 -129 73 -44 19 -104 52 -132 73 -29 22 -86 57 -127 77 -41\n21 -102 56 -135 80 -33 23 -89 57 -125 75 -36 18 -90 50 -120 70 -30 20 -95\n54 -143 75 -49 21 -107 54 -130 73 -23 18 -75 51 -117 72 -42 21 -96 55 -120\n75 -60 50 -97 68 -223 105 -87 26 -127 32 -210 33 -91 2 -113 -2 -207 -32\n-122 -39 -147 -51 -215 -101 -27 -21 -83 -54 -123 -74 -40 -20 -101 -56 -136\n-80 -35 -24 -100 -59 -145 -77 -45 -18 -102 -51 -128 -72 -26 -21 -79 -54\n-118 -72 -38 -19 -94 -52 -124 -74 -30 -23 -79 -50 -109 -61 -51 -19 -84 -40\n-175 -110 -21 -16 -67 -38 -102 -50 -41 -14 -87 -40 -127 -72 -35 -28 -96 -66\n-137 -84 -40 -19 -95 -50 -121 -69 -26 -19 -74 -47 -106 -60 -77 -33 -129 -62\n-184 -101 -25 -17 -72 -45 -106 -62 -33 -17 -81 -46 -107 -66 -60 -46 -88 -60\n-174 -85 -58 -18 -81 -31 -125 -73 -31 -30 -80 -63 -118 -81 -36 -16 -88 -46\n-115 -67 -28 -20 -84 -53 -125 -72 -41 -19 -106 -56 -144 -82 -38 -26 -98 -60\n-134 -76 -35 -17 -86 -46 -113 -65 -27 -19 -89 -55 -138 -79 -49 -24 -113 -62\n-143 -83 -29 -22 -84 -52 -123 -68 -38 -15 -95 -47 -126 -70 -31 -24 -94 -61\n-140 -84 -46 -22 -105 -58 -132 -79 -27 -22 -76 -47 -116 -60 -53 -17 -84 -36\n-130 -77 -34 -30 -85 -67 -114 -81 -29 -15 -71 -40 -95 -56 -90 -62 -147 -56\n-178 17 -21 50 -21 1709 0 1758 26 62 178 181 282 221 38 15 87 40 109 56 22\n16 62 42 89 57 27 16 90 55 140 89 50 33 120 71 156 82 44 15 88 41 135 79 39\n31 99 69 134 85 35 16 86 44 112 64 27 19 90 53 141 75 51 23 116 57 143 77\n28 20 76 49 108 64 32 16 93 52 136 82 43 29 104 61 135 71 40 13 75 35 122\n76 48 42 85 64 140 85 41 15 99 46 131 71 32 25 86 58 119 73 34 15 89 46 123\n69 34 23 93 55 131 70 38 16 100 51 137 79 37 27 100 65 138 85 39 19 88 49\n110 67 56 45 82 57 166 76 66 15 79 22 134 74 34 33 91 73 131 93 39 20 84 47\n100 60 16 14 72 45 124 69 52 24 111 59 131 76 34 30 147 92 167 92 5 0 41 23\n80 50 56 39 92 56 162 75 58 15 119 40 167 69 42 25 90 48 107 51 119 24 331\n81 394 106 118 47 183 59 397 69 110 6 205 13 210 15 15 6 462 -3 665 -13z\nm-9876 -1992 c60 -22 56 142 56 -2302 0 -2449 -3 -2303 61 -2429 40 -80 98\n-166 135 -200 16 -15 67 -48 114 -74 47 -26 99 -57 115 -70 17 -12 66 -41 110\n-65 44 -23 98 -57 120 -74 58 -46 82 -59 159 -90 38 -15 96 -47 130 -70 34\n-24 93 -59 131 -79 39 -19 88 -49 110 -67 22 -18 78 -50 124 -71 46 -22 104\n-55 128 -75 24 -20 84 -53 134 -74 49 -21 111 -54 137 -73 26 -19 74 -48 108\n-65 33 -17 80 -46 105 -64 70 -53 92 -65 183 -102 47 -19 103 -48 124 -64 20\n-16 69 -46 109 -66 40 -19 100 -61 134 -91 38 -34 77 -59 103 -66 88 -24 123\n-41 187 -92 36 -29 87 -61 115 -72 27 -10 81 -40 119 -65 39 -26 104 -63 145\n-82 41 -19 96 -50 120 -69 25 -19 81 -50 125 -68 44 -19 106 -54 137 -78 32\n-24 88 -58 124 -74 37 -17 102 -54 145 -84 43 -29 105 -64 139 -76 33 -12 84\n-39 112 -61 29 -22 79 -53 110 -69 32 -16 80 -49 108 -74 61 -54 86 -67 169\n-91 44 -12 85 -33 127 -66 35 -26 100 -65 146 -86 117 -54 145 -91 138 -182\n-3 -40 -45 -75 -113 -95 -81 -24 -112 -40 -167 -86 -25 -20 -79 -54 -120 -74\n-41 -21 -95 -52 -120 -69 -25 -18 -70 -42 -100 -55 -64 -27 -108 -53 -167 -97\n-22 -17 -79 -49 -125 -71 -45 -22 -110 -59 -142 -82 -34 -23 -90 -50 -128 -62\n-54 -16 -81 -32 -131 -76 -75 -67 -144 -108 -210 -124 -43 -10 -55 -9 -110 11\n-74 27 -135 61 -201 113 -58 45 -91 63 -162 87 -29 10 -77 36 -106 58 -30 22\n-81 53 -114 70 -32 17 -87 53 -121 80 -44 35 -85 58 -141 76 -57 19 -94 40\n-133 73 -30 25 -91 64 -137 85 -46 21 -107 56 -136 78 -28 22 -87 55 -130 75\n-43 19 -97 48 -119 64 -23 16 -84 49 -135 75 -52 26 -119 64 -150 85 -32 21\n-80 50 -109 65 -29 14 -78 47 -110 73 -39 32 -84 57 -138 76 -49 17 -102 45\n-136 72 -30 24 -84 58 -120 76 -35 18 -91 51 -124 73 -33 23 -92 54 -130 70\n-39 16 -106 53 -150 81 -44 28 -105 64 -135 80 -30 15 -80 48 -111 72 -32 25\n-94 59 -144 78 -48 19 -112 53 -141 75 -29 22 -88 57 -131 78 -113 56 -292\n167 -338 212 -46 43 -68 56 -133 75 -26 8 -61 25 -78 37 -87 64 -231 177 -244\n193 -8 10 -38 35 -65 55 -67 50 -361 342 -407 405 -20 28 -51 64 -68 80 -18\n17 -49 55 -70 85 -21 30 -56 78 -79 105 -23 28 -60 85 -82 129 -23 43 -59 104\n-81 135 -22 31 -53 85 -69 120 -16 35 -46 92 -68 125 -21 34 -55 108 -76 166\n-21 58 -48 125 -60 150 -36 71 -62 171 -90 338 -14 85 -38 193 -55 240 -69\n201 -85 367 -77 762 8 330 15 388 68 541 24 73 48 167 59 243 28 180 47 251\n92 341 22 44 53 119 69 167 15 48 48 118 72 157 24 38 54 98 68 131 13 34 48\n93 77 132 29 39 62 88 72 109 11 21 40 63 64 93 25 29 62 78 82 107 21 30 59\n79 84 109 25 30 62 78 82 105 67 92 365 374 477 452 38 26 90 65 117 86 147\n113 221 162 301 194 48 19 108 52 133 73 25 21 66 47 90 58 25 12 90 41 145\n66 101 46 142 54 189 36z m8473 -1021 c177 -101 221 -129 281 -177 50 -39 87\n-58 147 -77 60 -19 95 -37 143 -76 34 -27 95 -66 135 -86 39 -20 86 -47 104\n-60 17 -13 81 -50 140 -81 196 -103 254 -136 357 -203 55 -36 135 -82 176\n-101 41 -19 98 -51 126 -71 29 -21 87 -54 130 -74 44 -19 104 -52 134 -73 30\n-20 80 -51 111 -68 31 -17 77 -50 103 -73 29 -25 78 -54 131 -74 46 -18 113\n-54 148 -79 35 -25 92 -59 128 -76 35 -16 91 -49 125 -73 33 -24 95 -58 138\n-76 74 -31 109 -51 331 -195 55 -35 129 -77 165 -93 36 -16 97 -52 135 -80 39\n-28 99 -63 134 -77 35 -14 87 -43 115 -64 28 -22 86 -57 128 -80 42 -22 100\n-59 129 -82 29 -23 74 -52 99 -65 115 -58 525 -428 669 -603 203 -248 243\n-300 275 -362 20 -37 56 -92 80 -121 26 -32 57 -87 75 -136 18 -44 46 -98 62\n-120 42 -52 64 -96 84 -173 10 -36 34 -99 55 -140 50 -102 64 -147 105 -350\n19 -96 50 -219 70 -272 19 -54 39 -126 45 -161 14 -91 14 -923 0 -1017 -7 -41\n-32 -128 -56 -192 -28 -77 -50 -159 -63 -240 -11 -68 -30 -152 -42 -188 -41\n-126 -149 -382 -180 -427 -17 -24 -51 -88 -76 -141 -25 -53 -62 -121 -82 -152\n-21 -30 -54 -84 -73 -120 -20 -36 -47 -74 -59 -85 -20 -18 -78 -92 -207 -263\n-88 -118 -432 -441 -567 -532 -27 -19 -78 -57 -111 -85 -99 -80 -262 -180\n-358 -219 -49 -20 -117 -53 -150 -75 -68 -43 -182 -91 -218 -91 -28 0 -64 23\n-78 51 -8 14 -11 689 -10 2222 0 1497 -3 2223 -10 2266 -27 163 -135 350 -238\n413 -21 12 -59 39 -87 59 -27 20 -72 48 -100 62 -27 14 -79 46 -115 73 -36 26\n-109 67 -163 91 -54 23 -116 57 -138 74 -22 17 -77 50 -122 74 -128 66 -295\n171 -348 219 -34 31 -69 50 -121 67 -40 13 -99 42 -133 66 -33 23 -87 57 -120\n74 -33 17 -88 51 -123 76 -35 25 -108 64 -163 88 -54 24 -112 53 -128 64 -15\n11 -67 43 -115 71 -48 27 -107 66 -130 85 -23 19 -85 54 -137 78 -52 24 -108\n56 -125 70 -31 26 -144 87 -162 87 -5 0 -40 22 -78 49 -39 27 -99 63 -134 81\n-36 18 -93 53 -128 77 -35 25 -91 56 -125 70 -34 14 -91 44 -127 68 -36 23\n-94 57 -130 75 -36 18 -89 50 -119 72 -29 22 -101 63 -159 90 -58 27 -122 62\n-141 77 -20 16 -70 45 -111 66 -41 21 -99 60 -128 86 -41 37 -70 54 -123 70\n-46 14 -88 36 -127 66 -31 25 -88 60 -127 78 -38 19 -91 49 -117 69 -26 20\n-75 48 -110 63 -87 37 -115 58 -123 93 -14 66 46 131 192 204 40 20 105 57\n145 83 41 27 99 56 129 67 31 10 87 40 125 67 38 26 98 65 134 85 36 20 95 56\n131 81 36 24 106 59 155 77 57 21 113 52 157 85 38 28 83 58 100 67 18 9 63\n39 100 67 89 65 126 78 209 74 53 -3 78 -11 125 -38z m-2520 -1429 c33 -17 86\n-53 117 -80 64 -56 88 -70 163 -94 29 -10 81 -38 115 -64 35 -25 97 -62 138\n-81 41 -20 102 -55 135 -77 33 -23 94 -58 135 -79 41 -21 88 -48 105 -60 16\n-13 59 -37 95 -55 36 -18 101 -56 145 -85 44 -28 118 -71 165 -94 47 -23 110\n-59 140 -81 30 -21 85 -51 122 -66 37 -15 89 -43 116 -63 26 -20 79 -53 117\n-73 85 -45 118 -78 139 -142 15 -45 17 -155 16 -1169 0 -973 -2 -1124 -15\n-1151 -10 -20 -37 -45 -73 -66 -31 -18 -79 -51 -105 -73 -27 -22 -90 -62 -140\n-89 -51 -27 -99 -56 -107 -63 -8 -7 -62 -38 -120 -68 -58 -29 -125 -67 -150\n-84 -25 -17 -74 -43 -110 -58 -36 -15 -93 -49 -128 -75 -34 -27 -94 -61 -132\n-76 -39 -15 -98 -50 -136 -80 -37 -29 -100 -67 -142 -84 -41 -18 -107 -53\n-146 -79 -222 -149 -291 -192 -324 -201 -20 -5 -62 -25 -92 -44 -107 -69 -138\n-80 -184 -66 -22 7 -59 25 -81 40 -22 15 -76 45 -120 67 -44 22 -111 60 -150\n85 -38 25 -94 57 -123 72 -29 15 -74 42 -100 60 -26 19 -81 49 -122 68 -41 19\n-100 56 -132 82 -32 26 -91 62 -136 80 -44 18 -108 54 -143 78 -35 25 -93 60\n-129 78 -36 18 -84 46 -108 62 -24 17 -73 43 -110 60 -36 17 -91 46 -122 66\n-30 20 -98 59 -152 88 -53 29 -119 69 -146 91 -28 21 -71 50 -96 65 -25 15\n-55 42 -66 60 -20 33 -20 49 -20 1154 0 1247 -3 1193 66 1253 19 17 62 45 95\n62 33 16 82 45 108 65 27 19 84 51 127 70 44 20 113 60 154 89 41 29 105 66\n141 83 37 16 94 48 128 71 34 23 92 56 129 72 37 17 90 48 118 69 27 22 79 53\n115 69 35 16 89 46 119 66 30 20 86 53 124 72 38 19 105 59 148 89 44 30 87\n54 96 54 33 0 118 48 187 105 135 112 228 132 342 75z m2984 -1726 c30 -20 90\n-55 134 -77 44 -21 99 -55 122 -73 38 -32 151 -94 169 -94 4 0 33 -20 65 -45\n31 -24 91 -60 134 -80 42 -19 99 -53 126 -75 26 -23 88 -58 136 -79 48 -20\n111 -53 138 -73 28 -20 79 -50 114 -68 35 -17 107 -60 160 -96 53 -35 113 -75\n133 -88 27 -18 40 -36 48 -66 15 -57 8 -4691 -8 -4775 -6 -33 -18 -118 -27\n-190 -9 -76 -30 -180 -50 -250 -19 -66 -41 -156 -50 -200 -10 -50 -35 -118\n-65 -180 -26 -55 -56 -131 -65 -170 -23 -100 -40 -139 -89 -209 -24 -33 -58\n-95 -75 -137 -18 -42 -50 -101 -72 -130 -23 -30 -53 -79 -69 -110 -16 -30 -48\n-80 -72 -110 -25 -29 -63 -85 -86 -124 -23 -40 -74 -103 -117 -145 -42 -41\n-110 -116 -151 -167 -42 -51 -116 -126 -167 -168 -51 -41 -132 -111 -182 -155\n-53 -47 -123 -97 -170 -122 -44 -22 -100 -59 -125 -81 -25 -21 -80 -57 -123\n-78 -43 -22 -99 -55 -125 -73 -26 -18 -67 -41 -92 -50 -25 -10 -81 -37 -125\n-61 -81 -44 -173 -77 -320 -115 -44 -11 -121 -41 -170 -66 -77 -38 -104 -46\n-185 -55 -52 -5 -149 -21 -215 -35 -230 -47 -344 -56 -660 -51 -291 4 -316 7\n-507 51 -36 9 -126 23 -200 31 -126 14 -138 17 -233 64 -95 48 -165 71 -263\n86 -23 4 -86 29 -139 56 -53 28 -132 64 -175 80 -43 17 -100 47 -125 66 -25\n19 -81 52 -123 74 -42 21 -99 56 -127 77 -27 22 -83 58 -124 81 -86 48 -114\n76 -130 130 -23 78 11 127 116 166 39 14 95 45 125 68 30 24 90 62 133 86 42\n23 99 57 126 75 27 19 84 48 127 66 44 18 102 49 130 70 28 21 84 54 125 75\n40 20 97 54 125 76 29 22 88 55 132 73 44 19 106 55 138 81 32 26 90 63 128\n82 39 19 86 46 104 60 17 13 60 38 95 55 34 17 96 53 138 80 42 27 105 60 140\n74 35 14 101 52 146 85 45 33 108 72 140 87 32 15 86 44 120 65 34 21 102 56\n150 78 48 23 106 56 128 73 22 18 74 52 115 75 41 23 92 56 113 73 21 17 79\n47 127 68 49 21 115 59 147 83 32 25 87 60 123 78 36 17 85 46 110 63 25 18\n86 54 135 80 50 27 108 61 131 76 22 16 69 40 104 54 36 15 82 38 104 52 59\n39 188 143 214 173 32 36 76 125 109 218 l28 78 2 2674 c1 1470 5 2682 8 2692\n9 26 52 48 96 49 26 0 53 -11 90 -36z m-1046 -2889 c14 -13 25 -34 26 -47 0\n-13 0 -398 0 -857 l0 -834 -26 -53 c-33 -67 -77 -106 -178 -155 -44 -21 -103\n-57 -131 -78 -28 -22 -88 -55 -134 -75 -46 -19 -102 -50 -125 -69 -23 -19 -78\n-53 -122 -75 -44 -22 -104 -58 -134 -81 -29 -22 -77 -48 -105 -57 -71 -23\n-101 -40 -174 -96 -36 -27 -92 -63 -125 -79 -33 -17 -82 -46 -108 -64 -26 -18\n-87 -49 -135 -69 -49 -20 -111 -54 -139 -75 -27 -22 -82 -55 -121 -74 -40 -20\n-102 -59 -138 -87 -37 -27 -75 -50 -84 -50 -29 0 -118 -46 -158 -82 -44 -39\n-93 -69 -144 -88 -19 -7 -71 -37 -115 -65 -44 -29 -96 -60 -115 -70 -19 -10\n-71 -41 -115 -70 -44 -28 -109 -62 -144 -75 -35 -13 -97 -48 -139 -77 -41 -30\n-102 -68 -136 -85 -33 -17 -86 -48 -117 -69 -31 -21 -95 -53 -142 -72 -51 -21\n-109 -54 -143 -82 -32 -25 -76 -56 -98 -67 -23 -11 -72 -42 -111 -69 -38 -26\n-97 -58 -130 -70 -54 -20 -99 -46 -199 -115 -17 -12 -60 -32 -96 -45 -36 -13\n-111 -47 -167 -76 -57 -28 -144 -63 -195 -78 -51 -15 -129 -42 -173 -60 -115\n-47 -361 -93 -565 -106 -91 -5 -241 -16 -335 -24 -192 -17 -287 -18 -360 -5\n-83 15 -193 29 -330 40 -207 17 -388 52 -481 93 -45 19 -128 47 -185 62 -66\n17 -128 41 -170 66 -36 21 -102 50 -145 65 -97 32 -144 56 -209 105 -27 21\n-81 51 -118 68 -65 29 -113 61 -255 168 -35 27 -96 73 -137 103 -41 30 -107\n89 -147 130 -40 42 -106 105 -146 140 -40 36 -90 88 -110 115 -20 28 -66 82\n-102 121 -122 133 -297 379 -366 516 -18 37 -52 94 -73 128 -22 34 -50 87 -61\n118 -12 31 -41 93 -65 137 -50 92 -74 166 -105 320 -12 61 -41 160 -65 220\n-50 129 -61 182 -69 326 -3 59 -10 128 -16 155 -33 163 -37 442 -10 681 25\n224 45 272 114 273 38 0 226 -102 288 -156 55 -49 103 -77 165 -93 24 -7 72\n-32 108 -56 35 -25 99 -62 142 -84 43 -21 96 -53 118 -71 22 -18 76 -49 120\n-69 44 -21 104 -58 133 -83 36 -31 78 -55 130 -73 42 -15 104 -46 137 -70 33\n-23 92 -58 131 -78 40 -20 101 -57 137 -82 36 -25 99 -59 139 -76 40 -16 98\n-47 128 -68 30 -21 79 -50 108 -65 29 -15 77 -49 106 -76 66 -59 80 -67 148\n-81 68 -15 90 -27 162 -88 33 -28 81 -58 108 -67 26 -8 84 -40 129 -69 44 -30\n106 -66 137 -81 31 -15 83 -45 115 -66 32 -22 93 -55 135 -75 41 -19 98 -52\n125 -74 28 -22 80 -54 116 -71 36 -17 98 -53 137 -80 39 -27 108 -64 153 -82\n44 -19 104 -51 133 -72 45 -33 141 -88 298 -171 88 -45 259 -55 345 -18 21 8\n58 32 82 51 24 20 81 55 126 78 45 24 111 61 147 82 36 22 94 53 130 68 36 16\n86 44 112 62 26 18 75 47 110 65 35 17 99 58 144 90 44 33 87 59 95 59 33 1\n128 49 182 93 32 26 91 64 130 83 40 20 92 51 117 69 25 18 72 46 105 63 33\n16 87 49 120 71 33 23 91 53 129 67 38 15 104 51 146 80 43 29 113 70 156 92\n44 21 102 54 129 74 28 19 87 50 133 68 46 18 101 49 125 70 23 20 69 52 102\n71 33 18 95 57 138 86 43 29 84 53 90 53 23 0 119 50 160 84 23 18 80 53 127\n76 47 23 105 57 130 75 25 18 83 52 130 75 47 23 103 55 125 70 22 15 86 51\n143 78 56 28 121 64 144 80 24 16 73 43 109 59 36 17 90 52 120 79 57 52 78\n63 171 89 41 11 73 29 114 65 32 28 87 66 123 86 36 21 86 52 111 69 41 30\n116 69 195 101 50 21 93 17 120 -11z"/>\n</g>\n</svg>\n',tooltip:!0,withText:!0}),this.listenTo(s,"execute",(e=>{this.editor.execute(e.source.command,e.source.group)})),s}))}}class p extends e.Plugin{static get requires(){return[u,t.ContextualBalloon]}}const w={OpenAI:p}})(),o=o.default})()));