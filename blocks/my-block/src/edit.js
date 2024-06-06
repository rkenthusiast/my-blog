import { useBlockProps } from '@wordpress/block-editor';

const Edit = () => {
    const blockProps = useBlockProps();
    return (
        <div {...blockProps}>
            <p>Hello from the editor!</p>
        </div>
    );
};

export default Edit;

console.log('edit js');
