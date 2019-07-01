import React from 'react'
import ReactDOM from 'react-dom'

// import Router from '../navigation/router'

import { BrowserRouter } from 'react-router-dom'

import { Provider } from 'react-redux'
import store from '../config/store'

import '../app.css'
import Main from './main';

class App extends React.Component {
    render() {
        return (
            <BrowserRouter>
                <div className="login-container">
                    {/* <Router /> */}
                    <Main />
                </div>
            </BrowserRouter>
        );
    }
}

ReactDOM.render(
    <Provider store={store}>
        <App />
    </Provider>,
    document.getElementById('app')
);