/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
var opts = {};
var resources = [
];
var symbols = {
"stage": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "horizontal",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'staff',
                type: 'image',
                rect: ['94px', '105px','204px','251px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"staff.gif",'0px','0px']
            },
            {
                id: 'keyshadows',
                type: 'image',
                rect: ['354', '197px','563px','175px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"keyshadows.gif",'0px','0px']
            },
            {
                id: 'keyshadows2',
                type: 'image',
                rect: ['354', '-108px','563px','175px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"keyshadows.gif",'0px','0px']
            },
            {
                id: 'c_key',
                type: 'rect',
                rect: ['354', '44','auto','auto','auto', 'auto'],
                cursor: ['pointer']
            },
            {
                id: 'd_key',
                type: 'rect',
                rect: ['433', '44','auto','auto','auto', 'auto'],
                cursor: ['pointer']
            },
            {
                id: 'e_key',
                type: 'rect',
                rect: ['512', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'f_key',
                type: 'rect',
                rect: ['593', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'g_key',
                type: 'rect',
                rect: ['672', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'a_key',
                type: 'rect',
                rect: ['750', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'b_key',
                type: 'rect',
                rect: ['830', '44','auto','auto','auto', 'auto'],
                cursor: ['pointer']
            },
            {
                id: 'sharpshadows',
                type: 'image',
                rect: ['379px', '169px','517px','86px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"sharpshadows.gif",'0px','0px']
            },
            {
                id: 'gsharp_key',
                type: 'rect',
                rect: ['652', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'dsharp_key',
                type: 'rect',
                rect: ['413', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'esharp_key',
                type: 'rect',
                rect: ['493', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'asharp_key',
                type: 'rect',
                rect: ['731', '44','auto','auto','auto', 'auto']
            },
            {
                id: 'bsharp_key',
                type: 'rect',
                rect: ['811', '44','auto','auto','auto', 'auto']
            }],
            symbolInstances: [
            {
                id: 'f_key',
                symbolName: 'f_key',
                autoPlay: {

                }
            },
            {
                id: 'g_key',
                symbolName: 'g_key',
                autoPlay: {

                }
            },
            {
                id: 'd_key',
                symbolName: 'd_key',
                autoPlay: {

                }
            },
            {
                id: 'e_key',
                symbolName: 'e_key',
                autoPlay: {

                }
            },
            {
                id: 'esharp_key',
                symbolName: 'esharp_key',
                autoPlay: {

                }
            },
            {
                id: 'gsharp_key',
                symbolName: 'gsharp_key',
                autoPlay: {

                }
            },
            {
                id: 'bsharp_key',
                symbolName: 'bsharp_key',
                autoPlay: {

                }
            },
            {
                id: 'asharp_key',
                symbolName: 'asharp_key',
                autoPlay: {

                }
            },
            {
                id: 'dsharp_key',
                symbolName: 'dsharp_key',
                autoPlay: {

                }
            },
            {
                id: 'b_key',
                symbolName: 'b_key',
                autoPlay: {

                }
            },
            {
                id: 'c_key',
                symbolName: 'c_key',
                autoPlay: {

                }
            },
            {
                id: 'a_key',
                symbolName: 'a_key',
                autoPlay: {

                }
            }
            ]
        },
    states: {
        "Base State": {
            "${_keyshadows2}": [
                ["style", "top", '-108px']
            ],
            "${_sharpshadows}": [
                ["style", "left", '379px'],
                ["style", "top", '169px']
            ],
            "${_c_key}": [
                ["style", "cursor", 'pointer']
            ],
            "${_keyshadows}": [
                ["style", "top", '197px']
            ],
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,1)'],
                ["style", "width", '960px'],
                ["style", "height", '400px'],
                ["style", "overflow", 'hidden']
            ],
            "${_d_key}": [
                ["style", "cursor", 'pointer']
            ],
            "${_b_key}": [
                ["style", "cursor", 'pointer']
            ],
            "${_staff}": [
                ["style", "left", '94px'],
                ["style", "top", '105px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 0,
            autoPlay: true,
            timeline: [
            ]
        }
    }
},
"b_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'b',
                    type: 'image',
                    rect: ['0px', '0px', '86px', '312px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/b.gif', '0px', '0px']
                },
                {
                    id: 'Bnote3',
                    type: 'image',
                    rect: ['-650px', '19px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Bnote.gif', '0px', '0px']
                },
                {
                    rect: ['-155', '312', '320px', '45px', 'auto', 'auto'],
                    source: ['media/b4.m4a'],
                    id: 'b4',
                    type: 'audio',
                    tag: 'audio'
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_Bnote3}": [
                ["style", "top", '19px'],
                ["style", "opacity", '0'],
                ["style", "left", '-650px']
            ],
            "${_b}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '86px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid65", tween: [ "style", "${_b}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid66", tween: [ "style", "${_b}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid63", tween: [ "style", "${_Bnote3}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid64", tween: [ "style", "${_Bnote3}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid67", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_b4}', [0.5] ], ""], position: 250 },
                { id: "eid68", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_b4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"c_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'c',
                    type: 'image',
                    rect: ['0px', '0px', '87px', '312px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/c.gif', '0px', '0px']
                },
                {
                    id: 'Cnote2',
                    type: 'image',
                    rect: ['-174px', '202px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Cnote.gif', '0px', '0px']
                },
                {
                    rect: ['416', '281', '320px', '45px', 'auto', 'auto'],
                    source: ['media/c4.m4a'],
                    id: 'c4',
                    type: 'audio',
                    tag: 'audio'
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_c}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '87px']
            ],
            "${_Cnote2}": [
                ["style", "top", '201px'],
                ["style", "opacity", '0'],
                ["style", "left", '-174px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 500
            },
            timeline: [
                { id: "eid15", tween: [ "style", "${_Cnote2}", "opacity", '1', { fromValue: '0'}], position: 500, duration: 17 },
                { id: "eid16", tween: [ "style", "${_Cnote2}", "opacity", '0', { fromValue: '1'}], position: 517, duration: 483, easing: "easeInCubic" },
                { id: "eid11", tween: [ "style", "${_c}", "top", '16px', { fromValue: '0px'}], position: 500, duration: 17 },
                { id: "eid12", tween: [ "style", "${_c}", "top", '0px', { fromValue: '16px'}], position: 517, duration: 314, easing: "easeInQuart" },
                { id: "eid17", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_c4}', [0.5] ], ""], position: 500 },
                { id: "eid18", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_c4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"d_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'd',
                    type: 'image',
                    rect: ['0px', '0px', '86px', '312px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/d.gif', '0px', '0px']
                },
                {
                    rect: ['324', '324', '320px', '45px', 'auto', 'auto'],
                    source: ['media/d4.m4a'],
                    id: 'd4',
                    type: 'audio',
                    tag: 'audio'
                },
                {
                    id: 'Dnote2',
                    type: 'image',
                    rect: ['-253', '171px', '31px', '31px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Dnote.gif', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '86px']
            ],
            "${_d}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${_Dnote2}": [
                ["style", "top", '171px'],
                ["style", "opacity", '0']
            ],
            "${_d4}": [
                ["style", "opacity", '0']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid32", tween: [ "style", "${_d}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid33", tween: [ "style", "${_d}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid34", tween: [ "style", "${_Dnote2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid35", tween: [ "style", "${_Dnote2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid38", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_d4}', [0.61] ], ""], position: 250 },
                { id: "eid37", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_d4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"e_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    rect: ['0px', '0px', '86px', '312px', 'auto', 'auto'],
                    id: 'e',
                    type: 'image',
                    cursor: ['pointer'],
                    fill: ['rgba(0,0,0,0)', 'images/e.gif', '0px', '0px']
                },
                {
                    id: 'Enote2',
                    type: 'image',
                    rect: ['-332px', '140px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Enote.gif', '0px', '0px']
                },
                {
                    rect: ['223', '312', '320px', '45px', 'auto', 'auto'],
                    source: ['media/e4.m4a'],
                    id: 'e4',
                    type: 'audio',
                    tag: 'audio'
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_e}": [
                ["style", "top", '0px'],
                ["style", "cursor", 'pointer'],
                ["style", "left", '0px']
            ],
            "${_Enote2}": [
                ["style", "top", '140px'],
                ["style", "opacity", '0'],
                ["style", "left", '-332px']
            ],
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '86px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250,
                "press copy": 250
            },
            timeline: [
                { id: "eid39", tween: [ "style", "${_Enote2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid40", tween: [ "style", "${_Enote2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid41", tween: [ "style", "${_e}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid42", tween: [ "style", "${_e}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid43", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_e4}', [0.54] ], ""], position: 250 },
                { id: "eid44", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_e4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"f_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    rect: ['0px', '0px', '86px', '312px', 'auto', 'auto'],
                    id: 'f',
                    type: 'image',
                    cursor: ['pointer'],
                    fill: ['rgba(0,0,0,0)', 'images/f.gif', '0px', '0px']
                },
                {
                    id: 'Fnote2',
                    type: 'image',
                    rect: ['-413px', '110px', '32px', '31px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Fnote.gif', '0px', '0px']
                },
                {
                    rect: ['197', '335', '320px', '45px', 'auto', 'auto'],
                    source: ['media/f4.m4a'],
                    id: 'f4',
                    type: 'audio',
                    tag: 'audio'
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_f}": [
                ["style", "top", '0px'],
                ["style", "cursor", 'pointer'],
                ["style", "left", '0px']
            ],
            "${_Fnote2}": [
                ["style", "top", '110px'],
                ["style", "opacity", '0'],
                ["style", "left", '-413px']
            ],
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '86px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250,
                "press copy": 250
            },
            timeline: [
                { id: "eid47", tween: [ "style", "${_f}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid48", tween: [ "style", "${_f}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid45", tween: [ "style", "${_Fnote2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid46", tween: [ "style", "${_Fnote2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid49", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_f4}', [0.5] ], ""], position: 250 },
                { id: "eid50", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_f4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"g_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    rect: ['0px', '0px', '86px', '312px', 'auto', 'auto'],
                    id: 'g',
                    type: 'image',
                    cursor: ['pointer'],
                    fill: ['rgba(0,0,0,0)', 'images/g.gif', '0px', '0px']
                },
                {
                    id: 'Gnote2',
                    type: 'image',
                    rect: ['-492px', '79px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Gnote.gif', '0px', '0px']
                },
                {
                    rect: ['100', '340', '320px', '45px', 'auto', 'auto'],
                    source: ['media/g4.m4a'],
                    id: 'g4',
                    type: 'audio',
                    tag: 'audio'
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_g}": [
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "cursor", 'pointer']
            ],
            "${_Gnote2}": [
                ["style", "top", '79px'],
                ["style", "opacity", '0'],
                ["style", "left", '-492px']
            ],
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '86px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid51", tween: [ "style", "${_Gnote2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid52", tween: [ "style", "${_Gnote2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid53", tween: [ "style", "${_g}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid54", tween: [ "style", "${_g}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid55", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_g4}', [0.56] ], ""], position: 250 },
                { id: "eid56", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_g4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"a_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    rect: ['0px', '0px', '87px', '312px', 'auto', 'auto'],
                    id: 'a',
                    type: 'image',
                    cursor: ['pointer'],
                    fill: ['rgba(0,0,0,0)', 'images/a.gif', '0px', '0px']
                },
                {
                    id: 'Anote2',
                    type: 'image',
                    rect: ['-570px', '48px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Anote.gif', '0px', '0px']
                },
                {
                    rect: ['-49', '330', '320px', '45px', 'auto', 'auto'],
                    source: ['media/a4%201.m4a'],
                    id: 'a4_1',
                    type: 'audio',
                    tag: 'audio'
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_a}": [
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "cursor", 'pointer']
            ],
            "${_Anote2}": [
                ["style", "top", '48px'],
                ["style", "opacity", '0'],
                ["style", "left", '-570px']
            ],
            "${symbolSelector}": [
                ["style", "height", '312px'],
                ["style", "width", '87px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid57", tween: [ "style", "${_Anote2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid58", tween: [ "style", "${_Anote2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid59", tween: [ "style", "${_a}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid60", tween: [ "style", "${_a}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid112", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_a4_1}', [0.45] ], ""], position: 250 },
                { id: "eid113", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_a4_1}', [] ], ""], position: 4000 }            ]
        }
    }
},
"bsharp_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'bsharp',
                    type: 'image',
                    rect: ['0px', '0px', '47px', '159px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/b%23.gif', '0px', '0px']
                },
                {
                    id: 'Bnote',
                    type: 'image',
                    rect: ['-630px', '19', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Bnote.gif', '0px', '0px']
                },
                {
                    rect: ['-129', '329', '320px', '45px', 'auto', 'auto'],
                    source: ['media/b%234.m4a'],
                    id: 'b4',
                    type: 'audio',
                    tag: 'audio'
                },
                {
                    id: 'sharp',
                    type: 'image',
                    rect: ['-688px', '-15px', '100px', '100px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/sharp.gif', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_Bnote}": [
                ["style", "left", '-630px'],
                ["style", "opacity", '0']
            ],
            "${symbolSelector}": [
                ["style", "height", '159px'],
                ["style", "width", '47px']
            ],
            "${_bsharp}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${_sharp}": [
                ["style", "top", '-15px'],
                ["style", "opacity", '0'],
                ["style", "left", '-688px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid69", tween: [ "style", "${_Bnote}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid70", tween: [ "style", "${_Bnote}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid73", tween: [ "style", "${_sharp}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid74", tween: [ "style", "${_sharp}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid71", tween: [ "style", "${_bsharp}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid72", tween: [ "style", "${_bsharp}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid75", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_b4}', [0.5] ], ""], position: 250 },
                { id: "eid76", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_b4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"asharp_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'asharp',
                    type: 'image',
                    rect: ['0px', '0px', '48px', '159px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/a%23.gif', '0px', '0px']
                },
                {
                    id: 'Anote',
                    type: 'image',
                    rect: ['-550px', '49px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Anote.gif', '0px', '0px']
                },
                {
                    rect: ['48', '345', '320px', '45px', 'auto', 'auto'],
                    source: ['media/a%234.m4a'],
                    id: 'a4',
                    type: 'audio',
                    tag: 'audio'
                },
                {
                    id: 'sharp2',
                    type: 'image',
                    rect: ['-608px', '15px', '100px', '100px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/sharp.gif', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${symbolSelector}": [
                ["style", "height", '159px'],
                ["style", "width", '48px']
            ],
            "${_asharp}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${_sharp2}": [
                ["style", "top", '15px'],
                ["style", "opacity", '0'],
                ["style", "left", '-608px']
            ],
            "${_Anote}": [
                ["style", "top", '49px'],
                ["style", "opacity", '0'],
                ["style", "left", '-550px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid80", tween: [ "style", "${_sharp2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid81", tween: [ "style", "${_sharp2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid84", tween: [ "style", "${_asharp}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid85", tween: [ "style", "${_asharp}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid82", tween: [ "style", "${_Anote}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid83", tween: [ "style", "${_Anote}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid86", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_a4}', [0.5] ], ""], position: 250 },
                { id: "eid87", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_a4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"esharp_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'esharp',
                    type: 'image',
                    rect: ['0px', '0px', '47px', '159px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/e%23.gif', '0px', '0px']
                },
                {
                    id: 'Enote',
                    type: 'image',
                    rect: ['-312px', '141px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Enote.gif', '0px', '0px']
                },
                {
                    rect: ['234', '297', '320px', '45px', 'auto', 'auto'],
                    source: ['media/e%234.m4a'],
                    id: 'e4',
                    type: 'audio',
                    tag: 'audio'
                },
                {
                    id: 'sharp3',
                    type: 'image',
                    rect: ['-369px', '108px', '100px', '100px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/sharp.gif', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_esharp}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${_Enote}": [
                ["style", "top", '141px'],
                ["style", "opacity", '0'],
                ["style", "left", '-312px']
            ],
            "${symbolSelector}": [
                ["style", "height", '159px'],
                ["style", "width", '47px']
            ],
            "${_sharp3}": [
                ["style", "top", '108px'],
                ["style", "opacity", '0'],
                ["style", "left", '-369px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid92", tween: [ "style", "${_esharp}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid93", tween: [ "style", "${_esharp}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid90", tween: [ "style", "${_Enote}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid91", tween: [ "style", "${_Enote}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid88", tween: [ "style", "${_sharp3}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid89", tween: [ "style", "${_sharp3}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid94", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_e4}', [0.5] ], ""], position: 250 },
                { id: "eid95", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_e4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"dsharp_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'dsharp',
                    type: 'image',
                    rect: ['0px', '0px', '48px', '159px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/d%23.gif', '0px', '0px']
                },
                {
                    id: 'Dnote',
                    type: 'image',
                    rect: ['-232px', '172px', '31px', '31px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Dnote.gif', '0px', '0px']
                },
                {
                    rect: ['233', '284', '320px', '45px', 'auto', 'auto'],
                    source: ['media/d%234.m4a'],
                    id: 'd4',
                    type: 'audio',
                    tag: 'audio'
                },
                {
                    id: 'sharp4',
                    type: 'image',
                    rect: ['-288px', '137px', '100px', '100px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/sharp.gif', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_sharp4}": [
                ["style", "top", '137px'],
                ["style", "opacity", '0'],
                ["style", "left", '-288px']
            ],
            "${_dsharp}": [
                ["style", "left", '0px'],
                ["style", "top", '0px']
            ],
            "${symbolSelector}": [
                ["style", "height", '159px'],
                ["style", "width", '48px']
            ],
            "${_Dnote}": [
                ["style", "top", '172px'],
                ["style", "opacity", '0'],
                ["style", "left", '-232px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid96", tween: [ "style", "${_sharp4}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid97", tween: [ "style", "${_sharp4}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid100", tween: [ "style", "${_dsharp}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid101", tween: [ "style", "${_dsharp}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid98", tween: [ "style", "${_Dnote}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid99", tween: [ "style", "${_Dnote}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid108", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_d4}', [0.5] ], ""], position: 250 },
                { id: "eid109", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_d4}', [] ], ""], position: 4000 }            ]
        }
    }
},
"gsharp_key": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'gsharp',
                    type: 'image',
                    rect: ['0px', '0px', '47px', '159px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/g%23.gif', '0px', '0px']
                },
                {
                    id: 'Gnote2',
                    type: 'image',
                    rect: ['-471px', '80px', '31px', '32px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/Gnote.gif', '0px', '0px']
                },
                {
                    rect: ['-9', '315', '320px', '45px', 'auto', 'auto'],
                    source: ['media/g%234.m4a'],
                    id: 'g4',
                    type: 'audio',
                    tag: 'audio'
                },
                {
                    id: 'sharp5',
                    type: 'image',
                    rect: ['-527px', '47px', '100px', '100px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', 'images/sharp.gif', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_Gnote2}": [
                ["style", "top", '80px'],
                ["style", "opacity", '0'],
                ["style", "left", '-471px']
            ],
            "${symbolSelector}": [
                ["style", "height", '159px'],
                ["style", "width", '47px']
            ],
            "${_gsharp}": [
                ["style", "top", '0px'],
                ["style", "left", '0px']
            ],
            "${_sharp5}": [
                ["style", "top", '47px'],
                ["style", "opacity", '0'],
                ["style", "left", '-527px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: false,
            labels: {
                "press": 250
            },
            timeline: [
                { id: "eid106", tween: [ "style", "${_gsharp}", "top", '16px', { fromValue: '0px'}], position: 250, duration: 17 },
                { id: "eid107", tween: [ "style", "${_gsharp}", "top", '0px', { fromValue: '16px'}], position: 267, duration: 314, easing: "easeInQuart" },
                { id: "eid104", tween: [ "style", "${_Gnote2}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid105", tween: [ "style", "${_Gnote2}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid102", tween: [ "style", "${_sharp5}", "opacity", '1', { fromValue: '0'}], position: 250, duration: 17 },
                { id: "eid103", tween: [ "style", "${_sharp5}", "opacity", '0', { fromValue: '1'}], position: 267, duration: 483, easing: "easeInCubic" },
                { id: "eid110", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['play', '${_g4}', [0.5] ], ""], position: 250 },
                { id: "eid111", trigger: [ function executeMediaFunction(e, data) { this._executeMediaAction(e, data); }, ['pause', '${_g4}', [] ], ""], position: 4000 }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-64855210");
