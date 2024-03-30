@extends('admin.layouts.app')

@section('xdata-page')
    'data_admin_create'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Data Admin Create
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="/admin/home">Home /</a>
                        </li>
                        <li>
                            <a class="font-medium" href="/admin/data_admin">Data Admin /</a>
                        </li>
                        <li class="font-medium text-primary">Data Admin Create</li>
                    </ol>
                </nav>
            </div>

            <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
                <div class="flex flex-col gap-9">
                    <!-- Visi Create -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Data Admin Create
                            </h3>
                        </div>
                        <form action="{{ route('admin.data_admin.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="p-6.5">

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Name
                                    </label>
                                    <input type="text" name="name" value="{{ $user->name }}" required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Email
                                    </label>
                                    <input type="email" name="email" value="{{ $user->email }}" required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Password
                                    </label>
                                    <input type="password" name="password"
                                        placeholder="Kosongi jika tidak ingin mengubah password"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                    <div class="flex gap-1">
                                        <input type="checkbox" id="show-password" class="cursor-pointer">
                                        <label for="show-password" class="cursor-pointer">Show
                                            Password</label>
                                    </div>
                                </div>

                                <button type="submit"
                                    class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('after-script')
    <script type="module">
        $(document).ready(function() {
            $('#show-password').click(function() {
                var passwordField = $('input[name="password"]');

                if ($(this).prop('checked')) {
                    passwordField.attr('type', 'text');
                } else {
                    passwordField.attr('type', 'password');
                }
            });
        });
    </script>
@endsection
