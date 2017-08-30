const path = require('path');

const ROOT = path.resolve(__dirname);

function publicPath(args) {
    return path.resolve(ROOT, 'public', args);
}

function srcPath(args) {
    return path.resolve(ROOT, 'resources/assets', args)
}

function root(args) {
    return path.resolve(ROOT, args);
}

exports.root = root;
exports.publicPath = publicPath;
exports.srcPath = srcPath;
exports.ROOT = ROOT;