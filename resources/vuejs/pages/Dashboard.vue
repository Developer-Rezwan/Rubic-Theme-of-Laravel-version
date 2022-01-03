<template>
  <default>
    <!-- BEGIN: Horizontal Bar Chart -->
    <div class="intro-y box mt-5">
      <div
        class="
          flex flex-col
          sm:flex-row
          items-center
          p-5
          border-b border-gray-200
          dark:border-dark-5
        "
      >
        <h2 class="font-medium text-base mr-auto">Horizontal Bar Chart</h2>
        <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
          <label class="form-check-label ml-0 sm:ml-2" for="show-example-2"
            >Show example code</label
          >
          <input
            id="show-example-2"
            data-target="#horizontal-bar-chart"
            class="show-code form-check-switch mr-0 ml-3"
            type="checkbox"
          />
        </div>
      </div>
      <div id="horizontal-bar-chart" class="p-5">
        <div class="preview">
          <canvas id="horizontal-bar-chart-widget" height="200"></canvas>
        </div>
        <div class="source-code hidden">
          <button
            data-target="#copy-horizontal-bar-chart"
            class="copy-code btn py-1 px-2 btn-outline-secondary"
          >
            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
          </button>
          <div class="overflow-y-auto mt-3 rounded-md">
            <pre id="copy-horizontal-bar-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    
                                        HTMLOpenTagcanvas id=&quot;horizontal-bar-chart-widget&quot; height=&quot;200&quot;HTMLCloseTagHTMLOpenTag/canvasHTMLCloseTag
                                    
                                </code>
                            </pre>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Horizontal Bar Chart -->
  </default>
</template>

<script>
import Default from "../layouts/Default.vue"
export default {
  components: {
    Default,
  },
  mounted() {
    document.title = "Dashboard | Welcome to fashol.com"
  },
}
</script>

<style>
</style>