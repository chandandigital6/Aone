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
                  class="space-y-6"
                  id="advertisementForm">

                @csrf

                @if(isset($advertisement))
                    {{-- @method('PUT') --}}
                @endif

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

                                $selectedPosition = old('position', $advertisement->position ?? '');
                            @endphp

                            @foreach($positions as $key => $label)
                                <option value="{{ $key }}" @selected($selectedPosition == $key)>
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

                    <textarea
                        id="content-editor"
                        name="content"
                        rows="10"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm text-neutral-900 outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white"
                    >{{ old('content', $advertisement->content ?? '') }}</textarea>

                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center gap-3">
                    <input type="hidden" name="is_active" value="0">

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

    <style>
        .ck.ck-editor {
            width: 100% !important;
        }

        .ck.ck-toolbar {
            border-radius: 12px 12px 0 0 !important;
            border-color: #d4d4d4 !important;
            background: #ffffff !important;
        }

        .ck.ck-editor__main > .ck-editor__editable {
            min-height: 360px !important;
            background: #ffffff !important;
            color: #111827 !important;
            font-size: 16px !important;
            line-height: 1.7 !important;
            padding: 18px !important;
            border-radius: 0 0 12px 12px !important;
            border-color: #d4d4d4 !important;
        }

        .ck-content h1 {
            font-size: 32px;
            font-weight: 800;
        }

        .ck-content h2 {
            font-size: 26px;
            font-weight: 800;
        }

        .ck-content h3 {
            font-size: 22px;
            font-weight: 700;
        }

        .ck-content p {
            margin-bottom: 12px;
        }

        .ck-content ul,
        .ck-content ol {
            padding-left: 25px;
        }
    </style>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        function initAdvertisementEditor() {
            const textarea = document.querySelector('#content-editor');

            if (!textarea) {
                return;
            }

            if (textarea.dataset.ckeditorLoaded === '1') {
                return;
            }

            if (typeof ClassicEditor === 'undefined') {
                console.error('CKEditor load nahi hua. CDN issue ho sakta hai.');
                return;
            }

            textarea.dataset.ckeditorLoaded = '1';

            ClassicEditor
                .create(textarea, {
                    toolbar: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        '|',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'blockQuote',
                        'insertTable',
                        '|',
                        'undo',
                        'redo'
                    ],

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
                            }
                        ]
                    },

                    link: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://'
                    },

                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    }
                })
                .then(function (editor) {
                    window.advertisementEditor = editor;

                    const form = document.querySelector('#advertisementForm');

                    if (form) {
                        form.addEventListener('submit', function () {
                            textarea.value = editor.getData();
                            editor.updateSourceElement();
                        });
                    }

                    console.log('CKEditor loaded successfully.');
                })
                .catch(function (error) {
                    textarea.dataset.ckeditorLoaded = '0';
                    console.error('CKEditor Error:', error);
                });
        }

        document.addEventListener('DOMContentLoaded', initAdvertisementEditor);

        document.addEventListener('livewire:navigated', function () {
            setTimeout(initAdvertisementEditor, 200);
        });

        setTimeout(initAdvertisementEditor, 500);
    </script>

</x-layouts::app>