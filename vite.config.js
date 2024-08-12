
import { defineConfig } from 'vite'

export default defineConfig({
    build: {
      manifest: true,
      rollupOptions: {
        input: '/views/ja/main.js',
      },
    },
  })