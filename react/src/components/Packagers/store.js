import { create } from "zustand";

const usePackageStore = create((set) => ({
    packageData: null,
    setPackageData: (data) => set({ packageData: data }),
    showPopup: false,
    setShowPopup: (value) => set({ showPopup: value }),
}));

export default usePackageStore;
