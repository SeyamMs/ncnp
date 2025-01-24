import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";
import collapse from "@alpinejs/collapse";
import Toolkit from "@alpine-collective/toolkit";

import countdown from "./countdown.js";
Alpine.data("countdown", countdown);

window.Alpine = Alpine;

Alpine.plugin(intersect);
Alpine.plugin(collapse);
Alpine.plugin(Toolkit);

Alpine.start();
