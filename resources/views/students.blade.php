<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Niño Carl Veterbo · Student Management</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f5f2eb] text-[#20243b] antialiased selection:bg-[#d7ff6a] selection:text-[#20243b]">
        <header class="sticky top-0 z-30 border-b border-[#e8e2d7] bg-[#f5f2eb]/90 backdrop-blur-xl">
            <nav aria-label="Main navigation" class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-4 py-3.5 sm:px-6 lg:px-8">
                <a href="{{ route('students.index') }}" class="group inline-flex items-center gap-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#6872d9] focus:ring-offset-4 focus:ring-offset-[#f5f2eb]">
                    <span class="grid size-10 place-items-center rounded-xl bg-[#20243b] text-sm font-black tracking-tight text-[#d7ff6a] transition-transform duration-200 group-hover:-rotate-6">NC</span>
                    <span class="flex flex-col leading-none">
                        <span class="text-sm font-black tracking-[0.16em]">NINO / CARL</span>
                        <span class="mt-1.5 text-[10px] font-semibold uppercase tracking-[0.2em] text-[#777a86]">Student registry</span>
                    </span>
                </a>

                <div class="hidden items-center gap-7 text-sm font-semibold text-[#777a86] sm:flex">
                    <a href="#overview" class="transition-colors hover:text-[#20243b]">Overview</a>
                    <a href="#student-records" class="transition-colors hover:text-[#20243b]">Records</a>
                </div>

                <a href="#student-form" class="group inline-flex items-center gap-2 rounded-xl bg-[#d7ff6a] px-4 py-2.5 text-sm font-bold text-[#20243b] shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-[#cbf45a] hover:shadow-lg hover:shadow-[#20243b]/10 focus:outline-none focus:ring-2 focus:ring-[#6872d9] focus:ring-offset-2 focus:ring-offset-[#f5f2eb] motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                    Add student
                    <span aria-hidden="true" class="transition-transform duration-200 group-hover:translate-x-1 motion-reduce:transition-none">↗</span>
                </a>
            </nav>
        </header>

        <main class="mx-auto flex w-full max-w-7xl flex-col gap-7 px-4 py-7 sm:px-6 sm:py-9 lg:px-8">
            <section id="overview" aria-labelledby="profile-name" class="relative isolate grid overflow-hidden rounded-[2rem] bg-[#20243b] text-[#f8f6ef] shadow-2xl shadow-[#20243b]/15 lg:grid-cols-[1.15fr_0.85fr]">
                <div aria-hidden="true" class="absolute -right-24 -top-32 -z-10 size-96 rounded-full bg-[#6872d9]/25 blur-3xl"></div>
                <div class="flex flex-col items-start gap-6 px-6 py-8 sm:px-10 sm:py-11 lg:px-12 lg:py-14">
                    <p class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/[0.06] px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.19em] text-[#d7ff6a]">
                        <span aria-hidden="true" class="size-1.5 rounded-full bg-[#d7ff6a]"></span>
                        Creator Spotlight <span aria-hidden="true">/</span> 01
                    </p>
                    <div class="flex flex-col gap-4">
                        <h1 id="profile-name" class="max-w-2xl text-4xl font-semibold leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl">
                            Student records,<br>
                            <span class="font-serif italic text-[#d7ff6a]">with room to grow.</span>
                        </h1>
                        <p class="max-w-lg text-base leading-7 text-[#c4c5d0] sm:text-lg">
                            A thoughtful home for every student detail. Designed and built by <span class="font-semibold text-white">Niño Carl Veterbo.</span>
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-2" aria-label="Project technologies">
                        <span class="rounded-full border border-white/15 px-3 py-1.5 text-xs font-medium text-[#e1e1e8]">Laravel 13</span>
                        <span class="rounded-full border border-white/15 px-3 py-1.5 text-xs font-medium text-[#e1e1e8]">Tailwind CSS 4</span>
                        <span class="rounded-full border border-white/15 px-3 py-1.5 text-xs font-medium text-[#e1e1e8]">Student CRUD</span>
                    </div>
                    <a href="#student-records" class="group inline-flex items-center gap-2 text-sm font-semibold text-white underline decoration-[#d7ff6a]/50 underline-offset-4 transition-colors hover:text-[#d7ff6a]">
                        View student records
                        <span aria-hidden="true" class="transition-transform group-hover:translate-y-0.5">↓</span>
                    </a>
                </div>

                <div class="relative flex min-h-72 items-center justify-center overflow-hidden px-6 pb-8 sm:min-h-80 lg:min-h-full lg:px-8 lg:py-8">
                    <div aria-hidden="true" class="absolute inset-x-8 inset-y-5 rounded-[2rem] border border-white/10 bg-white/[0.035]"></div>
                    <div aria-hidden="true" class="absolute right-[14%] top-[13%] size-16 rounded-full bg-[#d7ff6a]"></div>
                    <div class="relative flex flex-col items-center gap-5">
                        <div class="relative">
                            <div aria-hidden="true" class="absolute -inset-3 rounded-[2rem] border border-dashed border-[#d7ff6a]/40"></div>
                            <img
                                src="{{ asset('images/nino-carl-veterbo.png') }}"
                                alt="Portrait of Niño Carl Veterbo"
                                class="relative h-48 w-48 rounded-[1.5rem] border border-white/20 object-cover shadow-2xl shadow-black/30 sm:h-56 sm:w-56"
                                width="224"
                                height="224"
                                fetchpriority="high"
                            >
                            <span aria-hidden="true" class="absolute -bottom-3 -right-3 grid size-12 place-items-center rounded-2xl bg-[#d7ff6a] text-xl font-bold text-[#20243b] shadow-lg">✳</span>
                        </div>
                        <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#2a2e49]/90 px-4 py-3 shadow-xl backdrop-blur">
                            <span class="grid size-11 place-items-center rounded-xl bg-white/10 text-sm font-bold text-[#d7ff6a]">{{ $students->count() }}</span>
                            <span class="flex flex-col gap-1">
                                <span class="text-sm font-bold text-white">Student records</span>
                                <span class="text-xs text-[#b9bbca]">One simple workspace</span>
                            </span>
                        </div>
                    </div>
                    <span class="absolute bottom-6 right-8 hidden text-[10px] font-bold uppercase tracking-[0.2em] text-white/40 sm:block">Made with intention · 2026</span>
                </div>
            </section>

            @if (session('success'))
                <div role="status" class="rounded-2xl border border-[#8dbb37]/30 bg-[#eaf5d2] px-5 py-4 text-sm font-semibold text-[#455d1e]">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div role="alert" class="rounded-2xl border border-[#c45148]/25 bg-[#fce8e4] px-5 py-4 text-sm font-semibold text-[#923b35]">
                    Please correct the validation errors.
                </div>
            @endif

            <div class="grid items-start gap-7 lg:grid-cols-[minmax(17rem,0.78fr)_minmax(0,1.22fr)]">
                <section id="student-form" aria-labelledby="student-form-heading" class="scroll-mt-24 rounded-[1.75rem] border border-[#e7e1d5] bg-white p-5 shadow-lg shadow-[#20243b]/[0.04] sm:p-7">
                    <div class="mb-6 flex flex-col gap-2">
                        <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#6872d9]">01 / New record</p>
                        <h2 id="student-form-heading" class="text-2xl font-bold tracking-tight text-[#20243b]">
                            {{ $editingStudent ? 'Edit student' : 'Add a student' }}
                        </h2>
                        <p class="text-sm leading-6 text-[#777a86]">The details that make each student unique.</p>
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

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1">
                            <div class="flex flex-col gap-2">
                                <label for="student_number" class="text-xs font-bold uppercase tracking-wide text-[#55596a]">Student Number</label>
                                <input id="student_number" name="student_number" type="text" value="{{ old('student_number', $editingStudent?->student_number) }}" required maxlength="255" class="rounded-xl border border-[#e5e2da] bg-[#faf9f5] px-3.5 py-3 text-sm text-[#20243b] outline-none transition placeholder:text-[#a1a2a7] focus:border-[#6872d9] focus:bg-white focus:ring-4 focus:ring-[#6872d9]/10">
                                @error('student_number')
                                    <p class="text-sm text-[#a63c35]">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="first_name" class="text-xs font-bold uppercase tracking-wide text-[#55596a]">First Name</label>
                                <input id="first_name" name="first_name" type="text" value="{{ old('first_name', $editingStudent?->first_name) }}" required maxlength="255" class="rounded-xl border border-[#e5e2da] bg-[#faf9f5] px-3.5 py-3 text-sm text-[#20243b] outline-none transition placeholder:text-[#a1a2a7] focus:border-[#6872d9] focus:bg-white focus:ring-4 focus:ring-[#6872d9]/10">
                                @error('first_name')
                                    <p class="text-sm text-[#a63c35]">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="last_name" class="text-xs font-bold uppercase tracking-wide text-[#55596a]">Last Name</label>
                                <input id="last_name" name="last_name" type="text" value="{{ old('last_name', $editingStudent?->last_name) }}" required maxlength="255" class="rounded-xl border border-[#e5e2da] bg-[#faf9f5] px-3.5 py-3 text-sm text-[#20243b] outline-none transition placeholder:text-[#a1a2a7] focus:border-[#6872d9] focus:bg-white focus:ring-4 focus:ring-[#6872d9]/10">
                                @error('last_name')
                                    <p class="text-sm text-[#a63c35]">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="email" class="text-xs font-bold uppercase tracking-wide text-[#55596a]">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email', $editingStudent?->email) }}" required maxlength="255" class="rounded-xl border border-[#e5e2da] bg-[#faf9f5] px-3.5 py-3 text-sm text-[#20243b] outline-none transition placeholder:text-[#a1a2a7] focus:border-[#6872d9] focus:bg-white focus:ring-4 focus:ring-[#6872d9]/10">
                                @error('email')
                                    <p class="text-sm text-[#a63c35]">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="course" class="text-xs font-bold uppercase tracking-wide text-[#55596a]">Course</label>
                                <input id="course" name="course" type="text" value="{{ old('course', $editingStudent?->course) }}" required maxlength="255" class="rounded-xl border border-[#e5e2da] bg-[#faf9f5] px-3.5 py-3 text-sm text-[#20243b] outline-none transition placeholder:text-[#a1a2a7] focus:border-[#6872d9] focus:bg-white focus:ring-4 focus:ring-[#6872d9]/10">
                                @error('course')
                                    <p class="text-sm text-[#a63c35]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 pt-1">
                            <button type="submit" class="group inline-flex items-center gap-2 rounded-xl bg-[#20243b] px-4 py-3 text-sm font-bold text-white shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-[#343957] hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#6872d9] focus:ring-offset-2 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                                {{ $editingStudent ? 'Update Student' : 'Save Student' }}
                                <span aria-hidden="true" class="text-[#d7ff6a] transition-transform group-hover:translate-x-1 motion-reduce:transition-none">→</span>
                            </button>
                            @if ($editingStudent)
                                <a href="{{ route('students.index') }}" class="rounded-xl border border-[#e5e2da] px-4 py-3 text-sm font-semibold text-[#55596a] transition-colors hover:bg-[#f5f2eb]">
                                    Cancel Edit
                                </a>
                            @endif
                        </div>
                    </form>
                </section>
                <section id="student-records" aria-labelledby="student-list-heading" class="scroll-mt-24 overflow-hidden rounded-[1.75rem] border border-[#e7e1d5] bg-white shadow-lg shadow-[#20243b]/[0.04]">
                    <div class="flex flex-wrap items-end justify-between gap-4 border-b border-[#eeeae2] px-5 py-5 sm:px-7">
                        <div class="flex flex-col gap-2">
                            <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#6872d9]">02 / Directory</p>
                            <h2 id="student-list-heading" class="text-2xl font-bold tracking-tight text-[#20243b]">Student Records</h2>
                        </div>
                        <span class="rounded-full bg-[#f1f0ec] px-3 py-1.5 text-xs font-bold text-[#55596a]">
                            {{ $students->count() }} {{ \Illuminate\Support\Str::plural('record', $students->count()) }}
                        </span>
                    </div>

                    @if ($students->isEmpty())
                        <div class="flex flex-col items-center gap-3 px-5 py-14 text-center sm:px-7">
                            <span aria-hidden="true" class="grid size-14 place-items-center rounded-2xl bg-[#f1f0ec] text-2xl text-[#6872d9]">✳</span>
                            <div class="flex flex-col gap-1">
                                <p class="font-bold text-[#20243b]">No student records yet</p>
                                <p class="max-w-sm text-sm leading-6 text-[#777a86]">Your directory is ready when you are. Add a student to make this space your own.</p>
                            </div>
                            <a href="#student-form" class="mt-1 text-sm font-bold text-[#5059b7] underline decoration-[#6872d9]/30 underline-offset-4 transition-colors hover:text-[#20243b]">Create the first record</a>
                        </div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-[#eeeae2] text-left text-sm">
                                <thead class="bg-[#faf9f5] text-[10px] font-bold uppercase tracking-[0.14em] text-[#777a86]">
                                    <tr>
                                        <th scope="col" class="whitespace-nowrap px-5 py-3.5 sm:px-7">Student Number</th>
                                        <th scope="col" class="whitespace-nowrap px-5 py-3.5">Full Name</th>
                                        <th scope="col" class="whitespace-nowrap px-5 py-3.5">Email</th>
                                        <th scope="col" class="whitespace-nowrap px-5 py-3.5">Course</th>
                                        <th scope="col" class="whitespace-nowrap px-5 py-3.5 sm:px-7">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#f0ede6]">
                                    @foreach ($students as $student)
                                        <tr class="align-top transition-colors hover:bg-[#f8faef]">
                                            <td class="whitespace-nowrap px-5 py-4 font-bold text-[#5059b7] sm:px-7">{{ $student->student_number }}</td>
                                            <td class="whitespace-nowrap px-5 py-4 font-semibold text-[#20243b]">{{ $student->first_name }} {{ $student->last_name }}</td>
                                            <td class="whitespace-nowrap px-5 py-4 text-[#626575]">{{ $student->email }}</td>
                                            <td class="whitespace-nowrap px-5 py-4 text-[#626575]">{{ $student->course }}</td>
                                            <td class="px-5 py-4 sm:px-7">
                                                <div class="flex items-center gap-3">
                                                    <a href="{{ route('students.edit', $student) }}" class="font-bold text-[#5059b7] transition-colors hover:text-[#20243b]">Edit</a>
                                                    <form method="POST" action="{{ route('students.destroy', $student) }}" onsubmit="return confirm('Delete this student?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="font-bold text-[#b64b42] transition-colors hover:text-[#83332d]">Delete</button>
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
            </div>

            <footer class="flex flex-col gap-2 border-t border-[#e8e2d7] pt-5 text-xs text-[#777a86] sm:flex-row sm:items-center sm:justify-between">
                <p>Niño Carl Veterbo <span aria-hidden="true">·</span> Student Registry</p>
                <p>Designed to keep the details in focus.</p>
            </footer>
        </main>
    </body>
</html>
