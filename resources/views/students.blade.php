<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Niño Carl Veterbo · Student Management</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased selection:bg-emerald-300 selection:text-slate-950">
        <main class="mx-auto flex w-full max-w-7xl flex-col gap-8 px-4 py-8 sm:px-6 lg:px-8">
            <section aria-labelledby="profile-name" class="relative isolate overflow-hidden rounded-3xl border border-emerald-300/15 bg-gradient-to-br from-slate-900 via-slate-900 to-emerald-950 px-6 py-8 text-white shadow-2xl shadow-emerald-950/30 sm:px-10 sm:py-10">
                <div aria-hidden="true" class="absolute -right-16 -top-24 -z-10 h-72 w-72 rounded-full bg-emerald-400/10 blur-3xl"></div>
                <div class="flex flex-col-reverse items-center gap-8 text-center sm:flex-row sm:justify-between sm:gap-10 sm:text-left">
                    <div class="flex max-w-2xl flex-col items-center gap-5 sm:items-start">
                        <div class="flex flex-col gap-2">
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-emerald-300">Creator Spotlight <span aria-hidden="true">/</span> 01</p>
                            <h1 id="profile-name" class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">Niño Carl Veterbo</h1>
                        </div>
                        <p class="max-w-xl text-base leading-7 text-slate-300 sm:text-lg">
                            A clean, single-page student records experience—designed and built by Niño Carl Veterbo.
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 sm:justify-start" aria-label="Project technologies">
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-medium text-slate-200">Laravel 13</span>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-medium text-slate-200">Tailwind CSS 4</span>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-medium text-slate-200">Student CRUD</span>
                        </div>
                        <a href="#student-records" class="inline-flex items-center gap-2 rounded-lg bg-emerald-300 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-emerald-200 focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:ring-offset-2 focus:ring-offset-slate-900">
                            View student records
                            <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                    <img
                        src="{{ asset('images/nino-carl-veterbo.png') }}"
                        alt="Portrait of Niño Carl Veterbo"
                        class="h-40 w-40 shrink-0 rounded-3xl border border-white/20 object-cover shadow-2xl shadow-black/40 ring-4 ring-emerald-300/20 sm:h-48 sm:w-48"
                        width="192"
                        height="192"
                        fetchpriority="high"
                    >
                </div>
            </section>

            @if (session('success'))
                <div role="status" class="rounded-lg border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-sm font-medium text-emerald-200">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div role="alert" class="rounded-lg border border-rose-400/20 bg-rose-400/10 px-4 py-3 text-sm font-medium text-rose-200">
                    Please correct the validation errors.
                </div>
            @endif

            <section aria-labelledby="student-form-heading" class="rounded-2xl border border-slate-800 bg-slate-900 p-5 shadow-xl shadow-black/10 sm:p-7">
                <div class="mb-6 flex flex-col gap-1">
                    <h2 id="student-form-heading" class="text-xl font-semibold text-slate-100">
                        {{ $editingStudent ? 'Edit student' : 'Add a student' }}
                    </h2>
                    <p class="text-sm text-slate-400">Enter the student details below.</p>
                </div>

                <form
                    method="POST"
                    action="{{ $editingStudent ? route('students.update', $editingStudent) : route('students.store') }}"
                    class="flex flex-col gap-5"
                >
                    @csrf
                    @if ($editingStudent)
                        @method('PUT')
                    @endif

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-5">
                        <div class="flex flex-col gap-2">
                            <label for="student_number" class="text-sm font-medium text-slate-200">Student Number</label>
                            <input id="student_number" name="student_number" type="text" value="{{ old('student_number', $editingStudent?->student_number) }}" required maxlength="255" class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-100 shadow-sm outline-none placeholder:text-slate-500 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400/15">
                            @error('student_number')
                                <p class="text-sm text-rose-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="first_name" class="text-sm font-medium text-slate-200">First Name</label>
                            <input id="first_name" name="first_name" type="text" value="{{ old('first_name', $editingStudent?->first_name) }}" required maxlength="255" class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-100 shadow-sm outline-none placeholder:text-slate-500 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400/15">
                            @error('first_name')
                                <p class="text-sm text-rose-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="last_name" class="text-sm font-medium text-slate-200">Last Name</label>
                            <input id="last_name" name="last_name" type="text" value="{{ old('last_name', $editingStudent?->last_name) }}" required maxlength="255" class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-100 shadow-sm outline-none placeholder:text-slate-500 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400/15">
                            @error('last_name')
                                <p class="text-sm text-rose-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="email" class="text-sm font-medium text-slate-200">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email', $editingStudent?->email) }}" required maxlength="255" class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-100 shadow-sm outline-none placeholder:text-slate-500 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400/15">
                            @error('email')
                                <p class="text-sm text-rose-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="course" class="text-sm font-medium text-slate-200">Course</label>
                            <input id="course" name="course" type="text" value="{{ old('course', $editingStudent?->course) }}" required maxlength="255" class="rounded-lg border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-100 shadow-sm outline-none placeholder:text-slate-500 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400/15">
                            @error('course')
                                <p class="text-sm text-rose-300">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-3">
                        <button type="submit" class="rounded-lg bg-emerald-400 px-4 py-2.5 text-sm font-semibold text-slate-950 shadow-sm transition hover:bg-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2 focus:ring-offset-slate-900">
                            {{ $editingStudent ? 'Update Student' : 'Save Student' }}
                        </button>
                        @if ($editingStudent)
                            <a href="{{ route('students.index') }}" class="rounded-lg border border-slate-700 px-4 py-2.5 text-sm font-semibold text-slate-200 transition hover:bg-slate-800">
                                Cancel Edit
                            </a>
                        @endif
                    </div>
                </form>
            </section>

            <section id="student-records" aria-labelledby="student-list-heading" class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-900 shadow-xl shadow-black/10">
                <div class="flex flex-col gap-1 border-b border-slate-800 px-5 py-5 sm:px-7">
                    <h2 id="student-list-heading" class="text-xl font-semibold text-slate-100">Student Records</h2>
                    <p class="text-sm text-slate-400">{{ $students->count() }} {{ \Illuminate\Support\Str::plural('record', $students->count()) }}</p>
                </div>

                @if ($students->isEmpty())
                    <div class="px-5 py-12 text-center sm:px-7">
                        <p class="font-medium text-slate-200">No student records yet</p>
                        <p class="mt-1 text-sm text-slate-400">Add a student using the form above to get started.</p>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-800 text-left text-sm">
                            <thead class="bg-slate-800/70 text-xs font-semibold uppercase tracking-wide text-slate-300">
                                <tr>
                                    <th scope="col" class="px-5 py-3.5 sm:px-7">Student Number</th>
                                    <th scope="col" class="px-5 py-3.5">Full Name</th>
                                    <th scope="col" class="px-5 py-3.5">Email</th>
                                    <th scope="col" class="px-5 py-3.5">Course</th>
                                    <th scope="col" class="px-5 py-3.5 sm:px-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/80">
                                @foreach ($students as $student)
                                    <tr class="align-top transition-colors hover:bg-slate-800/40">
                                        <td class="whitespace-nowrap px-5 py-4 font-medium text-emerald-200 sm:px-7">{{ $student->student_number }}</td>
                                        <td class="whitespace-nowrap px-5 py-4 text-slate-100">{{ $student->first_name }} {{ $student->last_name }}</td>
                                        <td class="whitespace-nowrap px-5 py-4 text-slate-300">{{ $student->email }}</td>
                                        <td class="whitespace-nowrap px-5 py-4 text-slate-300">{{ $student->course }}</td>
                                        <td class="px-5 py-4 sm:px-7">
                                            <div class="flex items-center gap-3">
                                                <a href="{{ route('students.edit', $student) }}" class="font-semibold text-emerald-300 hover:text-emerald-200">Edit</a>
                                                <form method="POST" action="{{ route('students.destroy', $student) }}" onsubmit="return confirm('Delete this student?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="font-semibold text-rose-300 hover:text-rose-200">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </section>
        </main>
    </body>
</html>
