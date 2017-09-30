/**
 * Title: Iframer
 * Creation Date: 29 09 2017 
 * Made: By Vinicios de Lima Clarindo 
 * github: https://github.com/vinicioslc
 * 
 * How to use ? 
 * <div class="preview-content" path="https://yourhtmlfilepath/index" height="320px" width="480px"></div>
 * now the module will create a iframe element inside all elements with the class above
 */
var Iframer = new function() {
    this.path = "index.html";
    this.height = "100%";
    this.width = "100%";
    this.LoadIframes = function (iframe) {        
        if (iframe == null || iframe == undefined){
            console.error("Iframer - Current page contains none element with class called preview-content !!");
        }
        else {
            this.doc_element = iframe;
            this.height = this.doc_element.getAttribute('height') ? this.doc_element.getAttribute('height') : this.height;
            this.width = this.doc_element.getAttribute('width') ? this.doc_element.getAttribute('width') : this.width;
            this.path = this.doc_element.getAttribute('path') ? this.doc_element.getAttribute('path') : this.path;
            this.elem = '<iframe class="iframe-small" src="'+ this.path +'" height="'+ this.height +'" width="'+ this.width + '"></iframe>';
            this.doc_element.insertAdjacentHTML('beforeend', this.elem);
        }
    };
}
window.onload = function () {
    var array = document.getElementsByClassName('preview-content');
    for(var c = 0; c < array.length; c++ ) {
        Iframer.LoadIframes(array[c]);
    }
};
