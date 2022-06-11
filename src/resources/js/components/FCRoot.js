import React from 'react';
import ReactDOM from 'react-dom';
import { useState } from "react";

export const FCRoot = ()=> {
    const [num, setNum] = useState(0);
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Ex Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default FCRoot;

if (document.getElementById('app')) {
    ReactDOM.render(<FCRoot />, document.getElementById('app'));
}
