let util = {

};
util.title = function (title) {
    window.document.title = title!=''?'优客满客房管理系统 - ' + title:'优客满客房管理系统';
};

export default util;