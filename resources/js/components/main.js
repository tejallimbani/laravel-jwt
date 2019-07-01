import React from 'react'
import Dashboard from './pages/dashboard';
import { Redirect } from 'react-router-dom'

class Main extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            redirect: false
        }
    }

    componentWillMount() {
        console.log(localStorage.getItem('userData'));
        if(localStorage.getItem('userData')) {
            this.setState({redirect: true});
        } else {
            this.setState({redirect: false});
        }
    }

    render() {

        const redirect = this.state;
        
        return (
            redirect ? <Redirect to="/login" /> : <Dashboard />
        );
    }
}

export default Main;