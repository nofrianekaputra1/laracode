import React from 'react';

//import Link, usePage
import { Link, usePage } from '@inertiajs/inertia-react';

function Layout({ children }) {

    const { auth } = usePage().props;

    return (
        <>
            <header>
                <nav className="navbar navbar-expand-md  bg-white sticky-top ">
                    <div className="container py-1">
                        <Link className="navbar-brand" href="/"><b><i>LARACODE</i></b></Link>
                        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span className="navbar-toggler-icon"></span>
                        </button>
                        <div className="collapse navbar-collapse" id="navbarCollapse">
                            <ul className="navbar-nav me-auto mb-2 mb-lg-0 ">
                                <li className="nav-item">
                                    <Link className="nav-link " aria-current="page" href={route('home')}><i className="bi bi-house"></i> Home</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link " aria-current="page" href="#"><i className="bi bi-app-indicator"></i> Layanan</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link " aria-current="page" href="#"><i className="bi bi-cart-check"></i> Shop</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link " aria-current="page" href="#"><i className="bi bi-award"></i> Portfolio</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <main >
                {children}
            </main>
        </>
    )

}

export default Layout