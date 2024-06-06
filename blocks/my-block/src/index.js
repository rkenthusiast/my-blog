import { registerBlockType } from '@wordpress/blocks';
import edit from './edit';
import save from './save';
import './style.css';
import './editor.css';

registerBlockType('myblog/my-block', {
    apiVersion: 2,
    title: 'My Block',
    icon: 'smiley',
    category: 'widgets',
    edit,
    save,
});

console.log('teststst');
