window._ = require('lodash');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('alpinejs');

import $ from "jquery";
window.$ = window.jQuery = $;
