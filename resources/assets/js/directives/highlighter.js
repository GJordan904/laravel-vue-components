import Prism from 'prismjs';

export default (el, binding) => {
    let language = Prism.languages.javascript;
    switch(binding.arg){
        case 'html':
            language = Prism.languages.http;
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
    console.log(binding);
    el.innerHTML = Prism.highlight(binding.val, language);
}