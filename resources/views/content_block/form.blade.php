<x-layouts::app :title="isset($contentBlock) ? __('Edit Content Block') : __('Create Content Block')">

    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">

        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-neutral-900 dark:text-white">
                    {{ isset($contentBlock) ? 'Edit Content Block' : 'Create Content Block' }}
                </h1>

                <p class="text-sm text-neutral-500 dark:text-neutral-400">
                    {{ isset($contentBlock) ? 'Update content block details.' : 'Add new content block.' }}
                </p>
            </div>

            <a href="{{ route('content-blocks.index') }}"
               class="inline-flex items-center justify-center rounded-xl border border-neutral-300 px-5 py-3 text-sm font-semibold text-neutral-700 transition hover:bg-neutral-100 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                Back
            </a>
        </div>

        <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">

            <form method="POST"
                  action="{{ isset($contentBlock) ? route('content-blocks.update', $contentBlock) : route('content-blocks.store') }}"
                  class="space-y-6">

                @csrf

                @if(isset($contentBlock))
                    @method('PUT')
                @endif

                <div class="grid gap-6 md:grid-cols-2">

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                            Title
                        </label>

                        <input type="text"
                               name="title"
                               value="{{ old('title', $contentBlock->title ?? '') }}"
                               placeholder="Enter title"
                               class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">

                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                            Key
                        </label>

                        <input type="text"
                               name="key"
                               value="{{ old('key', $contentBlock->key ?? '') }}"
                               placeholder="example: home-about-section"
                               class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">

                        @error('key')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                        Select Game
                    </label>

                    <select name="game_slug"
                            id="game_slug"
                            class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white">

                        <option value="">Select Game</option>

                        @foreach ($games as $game)
                            <option value="{{ $game->slug }}"
                                    data-id="{{ $game->id }}"
                                    data-name="{{ $game->name }}"
                                    @selected(old('game_slug', $contentBlock->game_slug ?? '') == $game->slug)>
                                {{ $game->name }}
                            </option>
                        @endforeach
                    </select>

                    <input type="hidden"
                           name="game_api_id"
                           id="game_api_id"
                           value="{{ old('game_api_id', $contentBlock->game_api_id ?? '') }}">

                    <input type="hidden"
                           name="game_name"
                           id="game_name"
                           value="{{ old('game_name', $contentBlock->game_name ?? '') }}">

                    @error('game_slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                        Content
                    </label>

                    <textarea
                        name="content"
                        id="content_editor"
                        rows="14"
                        class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm text-neutral-900 outline-none focus:border-black dark:border-neutral-700 dark:bg-neutral-800 dark:text-white"
                    >{{ old('content', $contentBlock->content ?? '') }}</textarea>

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
                           @checked(old('is_active', $contentBlock->is_active ?? true))
                           class="h-5 w-5 rounded border-neutral-300 text-black focus:ring-black">

                    <label for="is_active" class="text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                        Active Content
                    </label>
                </div>

                <div class="flex flex-col gap-3 border-t border-neutral-200 pt-6 md:flex-row md:items-center md:justify-end dark:border-neutral-700">

                    <a href="{{ route('content-blocks.index') }}"
                       class="inline-flex items-center justify-center rounded-xl border border-neutral-300 px-5 py-3 text-sm font-semibold text-neutral-700 transition hover:bg-neutral-100 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        Cancel
                    </a>

                    <button type="submit"
                            class="inline-flex items-center justify-center rounded-xl bg-black px-6 py-3 text-sm font-semibold text-white transition hover:bg-neutral-800 dark:bg-white dark:text-black">
                        {{ isset($contentBlock) ? 'Update Content' : 'Create Content' }}
                    </button>

                </div>

            </form>

        </div>

    </div>

    {{-- CKEditor 5 Classic Build --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <style>
        .ck-editor__editable {
            min-height: 380px !important;
            color: #111827 !important;
            background: #ffffff !important;
            font-size: 16px !important;
            line-height: 1.7 !important;
        }

        .ck.ck-editor {
            width: 100% !important;
        }

        .ck.ck-toolbar {
            border-radius: 12px 12px 0 0 !important;
        }

        .ck.ck-editor__main > .ck-editor__editable {
            border-radius: 0 0 12px 12px !important;
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
            padding-left: 24px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const textarea = document.querySelector('#content_editor');

            if (!textarea) {
                console.error('Content textarea not found.');
                return;
            }

            if (typeof ClassicEditor === 'undefined') {
                console.error('CKEditor CDN not loaded.');
                return;
            }

            ClassicEditor
                .create(textarea, {
                    toolbar: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'blockQuote',
                        'insertTable',
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
                .then(editor => {
                    window.contentEditor = editor;

                    const form = textarea.closest('form');

                    if (form) {
                        form.addEventListener('submit', function () {
                            textarea.value = editor.getData();
                            editor.updateSourceElement();
                        });
                    }
                })
                .catch(error => {
                    console.error('CKEditor Error:', error);
                });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const gameSelect = document.getElementById('game_slug');
            const gameApiId = document.getElementById('game_api_id');
            const gameName = document.getElementById('game_name');

            if (!gameSelect || !gameApiId || !gameName) return;

            function setGameData() {
                const option = gameSelect.options[gameSelect.selectedIndex];

                gameApiId.value = option.dataset.id || '';
                gameName.value = option.dataset.name || '';
            }

            gameSelect.addEventListener('change', setGameData);
            setGameData();
        });
    </script>

</x-layouts::app>