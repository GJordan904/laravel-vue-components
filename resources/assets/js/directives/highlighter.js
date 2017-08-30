import Prism from 'prismjs';

export default (el, {arg, value}) => {
    console.log(arg);
    let language = Prism.languages.javascript;
    switch(arg){
        case 'html':
            language = Prism.languages.html;
            break;
        case 'css':
            language = Prism.languages.css;
            break;
        case 'php':
            language = Prism.languages.php;
            break;
        case 'python':
            language = Prism.languages.python;
            break;
        case 'java':
            language = Prism.languages.java;
            break;
        case 'scss':
            language = Prism.languages.scss;
            break;
        case 'markup':
            language = Prism.languages.markup;
            break;
        case 'typescript':
            language = Prism.languages.typescript;
            break;
    }
    console.log(value);
    el.innerHTML = Prism.highlight(require('../examples/'+value), language)
}