const fs = require( 'fs-extra' );
const replace = require( 'replace-in-file' );

const pluginFiles = [
    // 'assets/**/*',
    'inc/**/*',
    // 'templates/**/*',
    // 'modules/**/*',
    'bearer.php',
];

const { version } = JSON.parse( fs.readFileSync( 'package.json' ) );

replace( {
    files: pluginFiles,
    from: /BEARER_SINCE/g,
    to: version,
} );