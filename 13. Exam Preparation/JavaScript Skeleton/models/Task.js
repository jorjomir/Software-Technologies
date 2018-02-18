const mongoose = require('mongoose');

let taskSchema = mongoose.Schema({
    status: {type: 'string', required: 'true'},
    title: {type: 'string', required: 'true'}
});

let Task = mongoose.model('Task', taskSchema);

module.exports = Task;