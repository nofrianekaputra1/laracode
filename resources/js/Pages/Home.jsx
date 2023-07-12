//import React
import React from 'react';

//import layout
import Layout from '../Layouts/Default';

//import Head, usePage
import { Head, usePage } from '@inertiajs/inertia-react';

function Home() {

    const { auth } = usePage().props;

    return (
        <>
            <Head>
                <title>Platform Jasa Programmer & Basecamp Download Sourcode - Laracode.com</title>
            </Head>
            <Layout>
                <section className='myhero'>
                    <div className=" container">
                        <div className="py-5 myhero text-white ">
                            <h1 className='mytxt'>LARACODE.COM</h1>
                            <h3 className='fw-bold'>Solusi Kebutuhan Bisnis Anda di Era Digital.</h3>
                            <p>
                                Laracode adalah perusahaan penyedia layanan jasa pembuatan website, sesuai kebutuhan bisnis anda dengan harga murah kualitas mewah.
                            </p>
                            <a href="" className='btn btn-white rounded-3 px-4 me-2'>Lihat Project Apps <i className="bi bi-chevron-right"></i></a>
                            <a href="" className='btn btn-outline-white rounded-3 px-4'>Lihat Penawaran <i className="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </section>

                <section className='pt-4 larac'>
                    <div className="container">
                        <p className='mytxt text-center fs-1'>Mengapa Harus <span className='myct'>Laracode?</span></p>
                        <div className="row d-flex justify-content-center">
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Fleksibel</span>
                                        <p className='mt-2'>
                                            Client dapat sewaktu – waktu melakukan perubahan selama tahap pengerjaan berlangsung
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Teknisi Profesional</span>
                                        <p className='mt-2'>
                                            Kami siap membantu dan memberikan saran terhadap aplikasi yang ingin dibuat sehingga menghasilkan aplikasi yang terbaik
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Harga Kompetitif</span>
                                        <p className='mt-2'>
                                            Dengan harga kompetitif client tidak perlu khawatir dengan masalah budget dan kualitas aplikasi yang diperoleh
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Clean Code</span>
                                        <p className='mt-2'>
                                            Kami menggunakan metode clean code yang dimana aplikasi dapat dengan mudah ditambahkan fitur di kemudian hari
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Jaminan Kepuasan</span>
                                        <p className='mt-2'>
                                            Client akan mendapatkan garansi berupa maintenance aplikasi yang kami buat hingga aplikasi tersebut dapat berjalan sesuai keinginan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Express dan Tepat Waktu</span>
                                        <p className='mt-2'>
                                            Proyek yang dikerjakan akan diselesaikan secepat mungkin dan menjamin selesai sesuai perjanjian atau lebih cepat
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Berkualitas</span>
                                        <p className='mt-2'>
                                            Engineer kami sudah terlatih dan berpengalaman dalam mengerjakan proyek sehingga kualitas tidak perlu diragukan lagi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4">
                                <div className="card h-100 border-0 shadow-sm rounded-4">
                                    <div className="card-body text-center">
                                        <div className="py-3">
                                            <svg height={100} aria-hidden="true" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        </div>
                                        <span className='fw-bold fs-4'>Terpercaya</span>
                                        <p className='mt-2'>
                                            Banyak client yang telah kami tangani dan kami mengutamakan kepuasan dari client
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </Layout >
        </>
    )

}

export default Home