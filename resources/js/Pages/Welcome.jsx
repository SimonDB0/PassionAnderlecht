import React from 'react';
import { Head, Link } from '@inertiajs/react';
import SimpleSlider from '../Components/SimpleSlider';

export default function Welcome({ auth }) {
    // Chemins des images locales
    const images = [
        { url: '/images/slider/rsca.jpg' },
        { url: '/images/slider/ANDERLECHT-SCLESSIN-2210.jpg' },

    ];

    return (
        <>
            <Head title="Welcome" />
            <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
                <header className="grid grid-cols-1 items-center gap-2 py-5">
                    <nav className="flex flex-1 justify-end">
                        {auth.user ? (
                            <Link
                                href={route('dashboard')}
                                className="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </Link>
                        ) : (
                            <>
                                <Link
                                    href={route('login')}
                                    className="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </Link>
                                <Link
                                    href={route('register')}
                                    className="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </Link>
                            </>
                        )}
                    </nav>
                </header>
            </div>
            <div className="container mx-auto mt-8">
                <SimpleSlider images={images} />
            </div>
        </>
    );
}
