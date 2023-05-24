<footer class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
      <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
        <div class="flex items-center gap-4">
          <p x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></p>
        </div>
      </div>

      <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
      </div>
</footer>