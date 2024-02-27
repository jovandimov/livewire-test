<div>
    <label>Post ID: </label>
    {{ $post->id }}
    <br />
    <label>Post Title: </label>
    {{ $post->title }}

    @script
        <script>
            setInterval(() => {
                $wire.$refresh()
            }, 2000)
        </script>
    @endscript
</div>
{{-- Using@script and @assets inside Blade components
If you are using Blade components to extract parts of your markup, you can use @script and @assets inside them as well; 
even if there are multiple Blade components inside the same Livewire component. However, @script and @assets are currently
 only supported in the context of a Livewire component, meaning if you use the given Blade component outside of Livewire entirely,
  those scripts and assets won't be loaded on the page. --}}
