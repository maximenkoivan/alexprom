"use strict";

import HandyCollapse from "handy-collapse";

class Tabs {
    constructor() {
        this.init()
    }

    init(){
        const tab = new HandyCollapse({
            nameSpace: "tab",
            toggleButtonAttr: 'data-tab-btn',
            toggleContentAttr: 'data-tab-content',
            closeOthers: true,
            isAnimation: false
        });
    }
}

export default Tabs;

