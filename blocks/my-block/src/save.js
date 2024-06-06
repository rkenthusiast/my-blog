import { useBlockProps } from '@wordpress/block-editor';

const Save = () => {
    const blockProps = useBlockProps.save();
    return (
        <div {...blockProps}>
            <p>Hello from the saved content!</p>
        </div>
    );
};

export default Save;
