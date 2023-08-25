import { useSelect, useDispatch } from '@wordpress/data';
import { TextControl } from '@wordpress/components';

const ServiceGithubField = () => {
	const value = useSelect(
		(select) =>
			select('core/editor').getEditedPostAttribute('meta')
				?.service_github || ''
	);
	const { editPost } = useDispatch('core/editor');

	const onChangeValue = (newValue) => {
		const updatedMeta = {
			service_github: newValue,
		};
		editPost({ meta: updatedMeta });
	};

	return (
		<TextControl label="GitHub" value={value} onChange={onChangeValue} />
	);
};

export default ServiceGithubField;
