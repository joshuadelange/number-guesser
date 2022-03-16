const axios = require('axios').default;

export default class API {

	endpoint_root = 'http://127.0.0.1:8000/api';
	endpoint = '';

	constructor(){
		return this;
	}

	post(endpoint, data){
		const url = this.endpoint_root + endpoint;
		console.info('REQUEST', url, data);
		return axios.post(url, data);
	}

	new_game() {
		return this.post('/games/new');
	}

	guess(data) {
		return this.post('/games/guess', data);
	}

}