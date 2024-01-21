// View your website at your own local server
// for example http://vite-php-setup.test

// http://localhost:5133 is serving Vite on development
// but accessing it directly will be empty
// TIP: consider changing the port for each project, see below

// IMPORTANT image urls in CSS works fine
// BUT you need to create a symlink on dev server to map this folder during dev:
// ln -s {path_to_project_source}/src/assets {path_to_public_html}/assets
// on production everything will work just fine
// (this happens because our Vite code is outside the server public access,
// if it were, we could use https://vitejs.dev/config/server-options.html#server-origin)

import { defineConfig, splitVendorChunkPlugin } from 'vite'
import liveReload from 'vite-plugin-live-reload'
import path from 'node:path'

// https://vitejs.dev/config/
export default defineConfig({

  plugins: [
    liveReload([
      // edit live reload paths according to your source code
      // for example:
      __dirname + './resources/views/**/*.php',
      // using this for our example:
      __dirname + './public/*.php',
    ]),
    splitVendorChunkPlugin(),
  ],

  // config
  root: 'resources',
  base: process.env.APP_ENV === 'development'
    ? '/'
    : '/dist/',

  build: {
    // output dir for production build
    outDir: '../public/dist',
    emptyOutDir: true,

    // emit manifest so PHP can find the hashed files
    manifest: true,

    // our entry
    rollupOptions: {
      input: [
        path.resolve(__dirname, 'resources/js/styles.js'),
        path.resolve(__dirname, 'resources/js/main.js'),
        path.resolve(__dirname, 'resources/js/libs.js'),
        path.resolve(__dirname, 'resources/js/homepage.js')
      ]
    }
  },

  server: {
    // we need a strict port to match on PHP side
    // change freely, but update on PHP to match the same port
    // tip: choose a different port per project to run them at the same time 
    strictPort: true,
    port: 5133
  }

})
