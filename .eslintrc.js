module.exports = {
    root: true,
    env: {
        browser: true,
    },
    parserOptions: {
        parser: 'babel-eslint',
        sourceType: 'module',
    },
    extends: [
        'airbnb-base',
        'plugin:vue/vue3-essential',
        'prettier/vue',
        'plugin:prettier/recommended',
    ],
    rules: {
        'comma-dangle': 'off',
        'no-param-reassign': 0,
        'class-methods-use-this': 'off',
        'import/no-unresolved': 'off',
        'import/extensions': 'off',
        'import/no-extraneous-dependencies': [
            'error',
            { devDependencies: true },
        ],
        'implicit-arrow-linebreak': 'off',
        'import/prefer-default-export': 'off',

        'prettier/prettier': [
            'error',
            { singleQuote: true, endOfLine: 'auto' },
        ],
    },
};
