function GetCurStyle(controller) {
    switch (controller.toLowerCase()) {
		case "home": $("#in01").addClass("cur"); break;
        case "home1": $("#in02").addClass("cur"); break;
        case "home2": $("#in03").addClass("cur"); break;
        case "home3": $("#in04").addClass("cur"); break;
		case "home4": $("#in05").addClass("cur"); break;
		case "home5": $("#in06").addClass("cur"); break;
		case "home6": $("#in07").addClass("cur"); break;
		case "home7": $("#in08").addClass("cur"); break;
        default: level1 = "";
    }
}