<x-layouts::app :title="isset($advertisement) ? __('Edit Advertisement') : __('Create Advertisement')">

    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">

        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-neutral-900 dark:text-white">
                    {{ isset($advertisement) ? 'Edit Advertisement' : 'Create Advertisement' }}
                </h1>

                <p class="text-sm text-neutral-500 dark:text-neutral-400">
                    {{ isset($advertisement) ? 'Update advertisement details.' : 'Add new advertisement.' }}
                </p>
            </div>

            <a href="{{ route('advertisements.index') }}"
               class="inline-flex items-center justify-center rounded-xl border border-neutral-300 px-5 py-3 text-sm font-semibold text-neutral-700 transition hover:bg-neutral-100 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                Back
            </a>
        </div>

        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">

            <form method="POST"
                  action="{{ isset($advertisement) ? route('advertisements.update', $advertisement) : route('advertisements.store') }}"
                  enctype="multipart/form-data"
                  class="space-y-6">

                @csrf

                <div class="grid gap-6 md:grid-cols-2">

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                            Title
                        </label>

                        <input type="text"
                               name="title"
                               value="{{ old('title', $advertisement->title ?? '') }}"
                               placeholder="Enter advertisement title"
                               class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">

                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                            Position
                        </label>

                        <select name="position"
                                class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">
                            <option value="">Select Position</option>

                            @php
                                $positions = [
                                    'top' => 'Top',
                                    'middle' => 'Middle',
                                    'bottom' => 'Bottom',
                                    'sidebar' => 'Sidebar',
                                    'home_top' => 'Home Top',
                                    'home_bottom' => 'Home Bottom',
                                ];
                            @endphp

                            @foreach($positions as $key => $label)
                                <option value="{{ $key }}" @selected(old('position', $advertisement->position ?? '') == $key)>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>

                        @error('position')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                            Image
                        </label>

                        <input type="file"
                               name="image"
                               accept="image/*"
                               class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">

                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        @if(isset($advertisement) && $advertisement->image)
                            <div class="mt-4">
                                <img src="{{ asset('storage/' . $advertisement->image) }}"
                                     class="h-24 w-40 rounded-xl object-cover border"
                                     alt="{{ $advertisement->title }}">
                            </div>
                        @endif
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                            Link
                        </label>

                        <input type="url"
                               name="link"
                               value="{{ old('link', $advertisement->link ?? '') }}"
                               placeholder="https://example.com"
                               class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">

                        @error('link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                        Content
                    </label>

                    <textarea id="content-editor"
          name="content"
          rows="10"
          class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm">
{{ old('content', $advertisement->content ?? '') }}
</textarea>

@error('content')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox"
                           name="is_active"
                           value="1"
                           id="is_active"
                           @checked(old('is_active', $advertisement->is_active ?? true))
                           class="h-5 w-5 rounded border-neutral-300 text-black focus:ring-black">

                    <label for="is_active" class="text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                        Active Advertisement
                    </label>
                </div>

                <div class="flex flex-col gap-3 border-t border-neutral-200 pt-6 md:flex-row md:items-center md:justify-end dark:border-neutral-700">

                    <a href="{{ route('advertisements.index') }}"
                       class="inline-flex items-center justify-center rounded-xl border border-neutral-300 px-5 py-3 text-sm font-semibold text-neutral-700 transition hover:bg-neutral-100 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        Cancel
                    </a>

                    <button type="submit"
                            class="inline-flex items-center justify-center rounded-xl bg-black px-6 py-3 text-sm font-semibold text-white transition hover:bg-neutral-800 dark:bg-white dark:text-black">
                        {{ isset($advertisement) ? 'Update Advertisement' : 'Create Advertisement' }}
                    </button>

                </div>

            </form>

        </div>

    </div>

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}



    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>

<script>
CKEDITOR.ClassicEditor.create(document.getElementById("content-editor"), {

    toolbar: {
        items: [
            'heading',
            '|',
            'fontfamily',
            'fontsize',
            'fontColor',
            'fontBackgroundColor',
            '|',
            'bold',
            'italic',
            'underline',
            'strikethrough',
            '|',
            'alignment',
            '|',
            'bulletedList',
            'numberedList',
            '|',
            'link',
            'insertTable',
            '|',
            'undo',
            'redo'
        ]
    },

    heading: {
        options: [
            {
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
            },
            {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'ck-heading_heading1'
            },
            {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
            },
            {
                model: 'heading3',
                view: 'h3',
                title: 'Heading 3',
                class: 'ck-heading_heading3'
            },
            {
                model: 'heading4',
                view: 'h4',
                title: 'Heading 4',
                class: 'ck-heading_heading4'
            },
            {
                model: 'heading5',
                view: 'h5',
                title: 'Heading 5',
                class: 'ck-heading_heading5'
            },
            {
                model: 'heading6',
                view: 'h6',
                title: 'Heading 6',
                class: 'ck-heading_heading6'
            }
        ]
    },

    fontSize: {
        options: [
            8,
            10,
            12,
            14,
            'default',
            18,
            20,
            24,
            28,
            32,
            40,
            48,
            60,
            72
        ],
        supportAllValues: true
    },

    fontFamily: {
        supportAllValues: true
    },

    htmlSupport: {
        allow: [
            {
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }
        ]
    }
})
.catch(error => {
    console.error(error);
});
</script>

{{-- <script>
document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
        .create(document.querySelector('#content-editor'))
        .catch(error => {
            console.error(error);
        });
});
</script> --}}

<style>
.ad-content *{
    max-width:100%;
}

.ad-content h1{
    font-size:48px;
}

.ad-content h2{
    font-size:40px;
}

.ad-content h3{
    font-size:32px;
}

.ad-content h4{
    font-size:28px;
}

.ad-content h5{
    font-size:24px;
}

.ad-content h6{
    font-size:20px;
}
</style>
</x-layouts::app>