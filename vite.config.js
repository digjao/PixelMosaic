import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import copy from 'rollup-plugin-copy'
import path from 'path'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
    copy({
      targets: [
        {
          src: 'resources/images/**/*',
          dest: 'public/images'
        }
      ],
      hook: 'buildStart'
    }),
  ],

  resolve: {
    alias: {
      '@images': path.resolve(__dirname, 'resources/images'),
    },
  },

  build: {
    outDir: 'public/build',
    rollupOptions: {
      output: {
        assetFileNames: ({ name }) => {
          if (/\.(png|jpe?g|svg|gif)$/.test(name ?? '')) {
            return 'images/[name]-[hash][extname]'
          }
          return 'assets/[name]-[hash][extname]'
        },
      },
    },
  },
})
